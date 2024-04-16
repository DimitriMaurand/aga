<?php

namespace src\Controllers;


use src\Models\User;
use src\Repositories\UserRepository;
use src\Services\Response;
use src\Services\Securite;

class HomeController
{
    use Response;
    use Securite;

    public static function index()
    {
        self::render("bienvenue");
    }



    public static function dobienvenue()
    {
        $data = !empty($_POST) ? self::sanitize($_POST) : self::sanitize(json_decode(file_get_contents("php://input")));

        $user = new User($data);

        if (
            $user->getNom() &&
            $user->getPrenom() &&
            $user->getMail() &&


            isset($data['password']) && isset($data['password2']) &&
            $data['password'] === $data['password2'] &&

            filter_var($user->getMail(), FILTER_VALIDATE_EMAIL)
        ) {
            $UserRepo = new UserRepository;
            $userExistant = $UserRepo->findbyEmail($user->getMail());
            if (!$userExistant) {

                $user->setPassword(password_hash($data['password'], PASSWORD_DEFAULT));

                $UserRepo = new UserRepository;
                $UserRepo->create($user);
                return true;
            } else {
                return ['echec' => "Email déjà utilisé, veuillez vous connecter."];
            }
        }
    }

    public static function signin()
    {
        $retour = self::dobienvenue();
        $retour = $retour !== true ? $retour : ['success' => "Email déjà utilisé, veuillez vous connecter."];
        self::render('connexion', ["message" =>  $retour], 201);
    }

    public static function addUser()
    {
        $retour = self::dobienvenue();
        $statusCode = $retour !== true ? 406 : 201;
        $retour = $retour !== true ? $retour : ['success' => "L'utilisateur a bien été ajouté"];
        self::JsonResponse(["message" => $retour], $statusCode);
    }

    public static function connexion()
    {
        $erreur = isset($_GET['erreur']) ? $_GET['erreur'] : null;
        self::render('connexion', ['erreur' => $erreur]);
    }

    public static function auth()
    {
        if (isset($_POST['mail']) && isset($_POST['password'])) {
            $UserRepo = new UserRepository;

            $user = $UserRepo->findbyEmail($_POST['mail']);

            if ($user && password_verify($_POST['password'], $user->getPassword())) {
                $_SESSION['connecté'] = true;
                $_SESSION['user'] = serialize($user);

                header('location: ' . HOME_URL . 'dashboard');
                exit;
            } else {
                header('location: ' . HOME_URL . 'connexion?erreur=denied');
            }
        }
    }

    public static function deconnexion()
    {
        session_destroy();
        header('location: ' . HOME_URL . 'bienvenue');
    }

    // public static function dashboardPromo()
    // {
    //     self::render('dashboardPromo', [], 302);
    // }
    public static function dashboardPromo()
    {

        self::render("dashboardPromo");
    }
}
