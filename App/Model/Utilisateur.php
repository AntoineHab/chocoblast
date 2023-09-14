<?php 
namespace App\Model;
use App\Utils\BddConnect;
class Utilisateur extends BddConnect{
    //attributs
    private ?int $id_utilisateur;
    private ?string $nom_utilisteur;
    private ?string $prenom_utilisateur;
    private ?string $mail_utilisateur;
    private ?string $password_utilisateur;
    private ?string $image_utilisateur;
    private ?bool $statut_utilisateur;

    private Roles $roles;

    //constructeur

    public function __construct(){
        $this->roles = new Roles();
        
    }

    //Getter et Setter
    public function getID():?int{
        return $this->id_utilisateur;
    }
    public function setID(?int $id){
        $this->id_utilisateur = $id;
    }
    public function getNom():?string{
        return $this->nom_utilisteur;
    }
    public function setNom(?String $nom){
        $this->nom_utilisateur = $nom;
    }
    public function getPrenom():?string{
        return $this->prenom_utilisateur;
    }
    public function setPrenom(?String$prenom){
        $this->prenom_utilisateur = $prenom;
    }
    public function getMail():?string{
        return $this->mail_utilisateur;
    }
    public function setMail(?String $mail){
        $this->mail_utilisateur = $mail;
    }
    public function getPassword():?string{
        return $this->password_utilisateur;
    }
    public function setPassword(?String $password){
        $this->password_utilisateur = $password;
    }
    public function getImage():?string{
        return $this->image_utilisateur;
    }
    public function setImage(?String $image){
        $this->image_utilisateur = $image;
    }
    public function getStatut():?bool{
        return $this->statut_utilisateur;
    }
    public function setStatut(?bool $statut){
        $this->statut_utilisateur = $statut;
    }
}

?>