<?php
namespace App\Model;
use App\Utils\BddConnect;
class Roles extends BddConnect{
    private ?int $id_roles;
    private ?string $nom_roles;

    //constructeur
    // public function __construct(){
        
    // }
    //Getter et Setter
    public function getID():?int{
        return $this->id_roles;
    }
    public function setID(?int $id){
        $this->id_roles = $id;
    }
    public function getNom():?string{
        return $this->nom_roles;
    }
    public function setNom(?String $nom){
        $this->nom_roles = $nom;
    }

    //Methodes 
    public function add(){
        try {
            $nom = $this->nom_roles;
            $req = $this->connexion()->prepare(
                "INSERT INTO roles(nom_roles) VALUES (?)"
            );
            $req->bindParam(1, $nom, \PDO::PARAM_STR);
            $req->execute();
        }
        catch(\Exception $e){
            die('Error  :' .$e->getMessage());
        }
    }

    public function findOneBy(){
        try {
            $nom=$this->nom_roles;
            $req=$this->connexion()->prepare(
                "SELECT nom_roles FROM roles WHERE nom_roles = ?"
            );
            $req->bindParam(1, $nom, \PDO::PARAM_STR);
            $req->setFetchMode(\PDO::FETCH_CLASS| \PDO::FETCH_PROPS_LATE,Roles::class);
            $req->execute();
            // $data=$req->fetchAll();
            return $req->fetch();
            // return $data;
        }
        catch(\Exception $e){
            die('Error  :' .$e->getMessage());
        }
    }
}

?>