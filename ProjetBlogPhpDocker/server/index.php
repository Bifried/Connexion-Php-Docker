<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");

require_once "vendor/autoload.php";

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case "GET":
        $objDb = new \App\Manager\UserManager(new \App\Factory\PDOFactory());
        $conn = $objDb->getAllUsers();
        echo json_encode($conn,true);
        break;

        /*
    case "POST":
        // Lire les datas en json
        $user = json_decode(file_get_contents('php://input'));
        $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES(:firstname, :lastname, :email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':firstname', $user->firstname);
        $stmt->bindParam(':lastname', $user->lastname);
        $stmt->bindParam(':email', $user->email);
        $stmt->bindParam(':password', $user->password);

        if ($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record created successfully.'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to create record.'];
        }
        echo json_encode($response);
        break;

    case "DELETE":
        $sql = "DELETE FROM users WHERE id = :id";
        $path = explode('/', $_SERVER['REQUEST_URI']);

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $path[3]);

        if ($stmt->execute()) {
            $response = ['status' => 1, 'message' => 'Record deleted successfully.'];
        } else {
            $response = ['status' => 0, 'message' => 'Failed to delete record.'];
        }
        echo json_encode($response);
        break;
        */
}
