<?php
namespace App\Controller;
use App\Model\Roles;
use App\Utils\Utilitaire;

class RolesController extends Roles {
    public function addRoles():void{      
        $error ="";

        //test si formulaire remplis
        if(isset($_POST["submit"])){
            dump("azeaz");
            //test si les champs sont remplis
            if(!empty($_POST["nom_roles"])){
                $this->setNom(Utilitaire::cleanInput($_POST["nom_roles"]));
                //Verifier si le role n'existe pas
                if(!$this->findOneBy()){
                    $this->add();
                    $error = "Le rôle à bien été ajouté";
                }
                else {
                    $error = "Le rôle existe déja";
                }
            }
            else{
                $error = "Veuillez remplir le formulaire";
            }
        }
        include './App/Vue/vueAddRoles.php';
    }
}


?>