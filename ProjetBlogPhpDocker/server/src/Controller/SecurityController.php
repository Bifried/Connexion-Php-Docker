<?php

namespace App\Controller;

use App\Entity\User;
use App\Factory\PDOFactory;
use App\Manager\UserManager;
use App\Route\Route;


class SecurityController extends AbstractController
{
    // ICI, METHOD POST, donc une sorte de création, pas un render d'une page
    // Accéder à la page marche avec GET
    /*
    #[Route('/logged', name: "logged", methods: ["POST"])]
    public function logged()
    {
        $formUsername = $_POST['username'];
        $formPwd = $_POST['password'];
        $userManager = new UserManager(new PDOFactory());
        $user = $userManager->getByUsername($formUsername);

        if (!$user) {
            header('Location: /login');
            exit;
        }

        if ($user->passwordMatch($formPwd)) {
            header('Location: /logged-success');
            exit;
        }

        header('Location: /logged-success');
        exit;
    }

    #[Route('/logged-success', name: "user-logged", methods: ["GET"])]
    public function loggedUser()
    {
        $this->render("/uusers.php", ["titre" => "Nappy",
            "content" => 'Amusez vous et partagez ensemble toutes vos aventures !😊'], "Page utilisateur");
    }

    #[Route('/register', name: "register", methods: ["GET"])]
    public function registerPage()
    {
        $this->render("/register.php", [], "Créer un compte");
    }*/

    #[Route('/users', name: "register", methods: ["GET"])]
    public function showUsers()
    {
        $this->render("/users.php", [], "Créer un compte");
    }

    #[Route('/', name: "everything", methods: ["GET"])]
    public function showEverything()
    {
        $this->render("/users.php", [], "Créer un compte");
    }


/*
    #[Route('/', name: "everything", methods: ["GET"])]
    public function registerNewUser()
    {

        $_POST = json_decode(file_get_contents('php://input'));
        $username = $_POST['username'];
        $password = $_POST["password"];
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email = $_POST['email'];
        $userManager = new UserManager(new PDOFactory());
        $newUser = new User();
        $newUser->setFirstName($firstname);
        $newUser->setLastName($lastname);
        $newUser->setUsername($username);
        $newUser->setPassword(md5($password));
        $newUser->setEmail($email);
        $userManager->insertUser($newUser);
        //header('Location: /login');

    }*/

}
