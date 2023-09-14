<?php
namespace App\Model;
use App\Utils\BddConnect;
class Roles extends BddConnect{
    private ?int $id_roles;
    private ?string $nom_roles;

    //constructeur
    public function __construct(){
        
    }
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
}


?>