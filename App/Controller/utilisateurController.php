<?php
namespace App\Controller;
use App\Model\Utilisateur;
use App\Utils\Utilitaire;
class UtilisateurController extends Utilisateur{

    public function addUser():void{
        $error = "";
        //tester si le formulaire

        if(isset($_POST['submit'])){
            //test si les champs sont remplis
            if(!empty($_POST['nom_utilisateur']) && !empty($_POST['prenom_utilisateur'])&& !empty($_POST['password_utilisateur'])
            && !empty($_POST['repeat_password_utilisateur'])&& !empty($_POST['mail_utilisateur'])){
                if($_POST["password_utilisateur"]==$_POST["repeat_password_utilisateur"]){
                //Set les valeur à l'objet UtilisateurController
                $this->setNom(Utilitaire::cleanInput($_POST['nom_utilisateur']));
                $this->setPrenom(Utilitaire::cleanInput($_POST['prenom_utilisateur']));
                $this->setMail(Utilitaire::cleanInput($_POST['mail_utilisateur']));
                //tester si le compte existe
                    if(!$this->findOneBuy()){
                        //hasher le mot de passe
                        $this->setPassword(password_hash(Utilitaire::cleanInput($_POST['password_utilisateur']), PASSWORD_DEFAULT));
                        $this->add();
                        $error='Le compte a été ajouté en BDD.';
                    }else {
                        $error ='Un compte avec ce mail existe déja.';
                } 
                }
                else {
                    $error = 'Les mots de passes ne correspondent pas.';
                }
                             
            }else {
                $error = "Veuillez renseigner tous les champs du formulaire";

            }
        }
        include './App/Vue/vueAddUser.php';
    } 
}
?>