<?php
//import de l'autoloader des classes
require_once './autoload.php';
require_once './vendor/autoload.php';
// require './vendor/autoload.php';
use App\Controller\RolesController;
use App\Controller\UtilisateurController;
$userController = new UtilisateurController();
$rolesController = new RolesController();
//Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/mvc/':
            include './home.php';
            break;
        case '/mvc/useradd':
            $userController->addUser();
            break;
        case '/mvc/rolesadd':
            $rolesController->addRoles();
            break;
        default:
            include './error.php';
            break;
    }
?>