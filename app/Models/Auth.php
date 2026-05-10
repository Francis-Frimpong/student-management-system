<?php
namespace App\Models;

USE PDO;

class Auth{
    private $pdo;
    

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getUserByEmail($email){
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function registerUser($name, $email, $password, $role){
        // verify is email already exist
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $stmt->fetch();
         
    

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $hashedPassword, $role]);

    }
}