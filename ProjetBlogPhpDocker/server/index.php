<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

use App\Route\Route;

require_once 'vendor/autoload.php';

/*********************************/

include 'dbConnect.php';
$objDb = new DbConnect;
$conn = $objDb->connect();
$method = $_SERVER['REQUEST_METHOD'];
if($method == "POST") {
    // Lire les datas en json
    $user = json_decode(file_get_contents('php://input'));
    $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES(:firstname, :lastname, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':firstname', $user->firstname);
    $firstName = (filter_input(INPUT_POST,"$user->firstname",FILTER_SANITIZE_SPECIAL_CHARS));
    $stmt->bindParam(':lastname', $user->lastname);
    $lastName = (filter_input(INPUT_POST,"$user->lastname",FILTER_SANITIZE_SPECIAL_CHARS));
    $stmt->bindParam(':email', $user->email);
    $email = (filter_input(INPUT_POST,"$user->email",FILTER_SANITIZE_SPECIAL_CHARS));
    $stmt->bindParam(':password', $user->password);

    if ($stmt->execute()) {
        $response = ['status' => 1, 'message' => 'Record created successfully.'];
    } else {
        $response = ['status' => 0, 'message' => 'Failed to create record.'];
    }
    echo json_encode($response);
}

/*********************************/

$controllerDir = dirname(__FILE__) . '/src/Controller';
$dirs = scandir($controllerDir);
$controllers = [];

foreach ($dirs as $dir) {
    if ($dir === "." || $dir === "..") {
        continue;
    }
    $controllers[] = "App\\Controller\\" . pathinfo($controllerDir . DIRECTORY_SEPARATOR . $dir)['filename'];
}

$routesObj = [];

foreach ($controllers as $controller) {
    $reflection = new ReflectionClass($controller);
    foreach ($reflection->getMethods() as $method) {
        foreach ($method->getAttributes() as $attribute) {
            /** @var Route $route */
            $route = $attribute->newInstance();
            $route->setController($controller)
                ->setAction($method->getName());

            $routesObj[] = $route;
        }
    }
}

$url = "/" . trim(explode("?", $_SERVER['REQUEST_URI'])[0], "/");

foreach ($routesObj as $route) {

    if (!$route->match($url) || !in_array($_SERVER['REQUEST_METHOD'], $route->getMethods())) {
        continue;
    }

    $controlerClassName = $route->getController();
    $action = $route->getAction();
    $params = $route->mergeParams($url);

    new $controlerClassName($action, $params);
    exit();
}

echo "NO MATCH TEST";

die;