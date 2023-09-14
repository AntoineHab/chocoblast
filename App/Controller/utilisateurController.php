<?php
namespace App\Controller;
use App\Model\Utilisateur;
class UtilisateurController extends Utilisateur{

    public function addUser():void{
        $erroe = "";
        include './App/Vue/vueAddUser.php';
    } 
}
?>