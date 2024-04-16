<?php

namespace src\Repositories;

use src\Models\Database;
use src\Models\User;

class UserRepository
{
    private $pdo;
    public function __construct()
    {
        $db = new Database();
        $this->pdo = $db->getPDO();
    }

    public function create(User $user)
    {
        try {
            $sql = "INSERT INTO users (ID, NOM, PRENOM, PASSWORD,  ADMIN,  MAIL) VALUES (null, :NOM, :PRENOM, :PASSWORD, :ADMIN, :MAIL)";

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':NOM' => $user->getNom(),
                ':PRENOM' => $user->getPrenom(),
                ':PASSWORD' => $user->getPassword(),
                ':ADMIN' => $user->isAdmin() ? 1 : 0,
                ':MAIL' => $user->getMail()
            ]);
        } catch (\PDOException $e) {
            throw new \Exception("Une erreur est survenue lors de l'enregistrement de l'utilisateur : " . $e->getMessage());
        }
    }

    public function findbyEmail($email): User|bool
    {
        try {
            $sql = "SELECT * FROM users WHERE MAIL = :MAIL";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':MAIL' => $email]);

            $stmt->setFetchMode(\PDO::FETCH_CLASS, User::class);

            return $stmt->fetch();
        } catch (\PDOException $e) {
            throw new \Exception('Erreur de récupération d\'un utilisateur par son email : ' . $e->getMessage());
        }
    }
}
