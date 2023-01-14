<?php

namespace App\Manager;

use App\Entity\User;

class UserManager extends BaseManager
{

    /**
     * @return User[]
     */
    public function getAllUsers(): array
    {
        $sql = "SELECT * FROM users";
        $path = explode('/', $_SERVER['REQUEST_URI']);
        if (isset($path[3]) && is_numeric($path[3])) {
            $sql .= " WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $path[3]);
            $stmt->execute();
            $users = $stmt->fetch(\PDO::FETCH_ASSOC);
        } else {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $users;
    }

    public function getByUsername(string $username): ?User
    {
        $query = $this->pdo->prepare("SELECT * FROM User WHERE username = :username");
        $query->bindValue("username", $username, \PDO::PARAM_STR);
        $query->execute();
        $data = $query->fetch(\PDO::FETCH_ASSOC);

        if ($data) {
            return new User($data);
        }

        return null;
    }

    public function insertUser(User $user)
    {
        $query = $this->pdo->prepare("INSERT INTO User (password, username, email, firstname, lastname) VALUES (:password, :username, :email, :firstname, :lastname)");
        $query->bindValue("password", $user->getHashedPassword(), \PDO::PARAM_STR);
        $query->bindValue("username", $user->getUsername(), \PDO::PARAM_STR);
        $query->bindValue("email", $user->getEmail(), \PDO::PARAM_STR);
        $query->bindValue("firstname", $user->getFirstName(), \PDO::PARAM_STR);
        $query->bindValue("lastname", $user->getLastName(), \PDO::PARAM_STR);
        $query->execute();
    }
}
