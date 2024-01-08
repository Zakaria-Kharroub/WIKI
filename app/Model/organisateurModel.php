<?php

namespace App\Model;

use App\Database\Database;
use PDO ;

class OrganisateurModel {
    private $db;
    protected $name ;
    protected $date_evenement;
    protected $lieu;
    protected $description;
    protected $disponibilite;	


    public function __construct() {
        $this->db = new Database();
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }

    public function getDateEvenement(){
        return $this->date_evenement;
    }
    public function getLieu(){
        return $this->lieu;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getDisponibilite(){
        return $this->disponibilite;
    }


    public function setId($id){
        $this->id=$id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function setDateEvenement($date_evenement){
        $this->date_evenement=$date_evenement;
    }
    public function setLieu($lieu){
        $this->lieu=$lieu;
    }
    public function setDescription($description){
        $this->description=$description;
    }
    public function setDisponibilite($disponibilite){
        $this->disponibilite=$disponibilite;
    }




    public function getEvents(){
         $query = "SELECT * FROM evenements";
        $stmt = $this->db->getConnection()->prepare($query);
         $stmt->execute();
        $events = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $events;
    }

    public function ajoutEvent(){
        $query = "INSERT INTO `evenements`(`name`, `date_evenement`, `lieu`, `description`, `disponibilite`) VALUES (?,?,?,?,?)";
         $stmt = $this->db->getConnection()->prepare($query);
         $stmt->execute([$this->getName(),$this->getDateEvenement(),$this->getLieu(),$this->getDescription(),$this->getDisponibilite()]);
        if($stmt){
        return true;
        }else{
        echo "error de ajoutment";
        }
    }


    public function deleteEvent(){
        $query = "DELETE FROM `evenements` WHERE id=?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute([$this->getId()]);
        if($stmt){
            return true;
        }else{
            echo "error de supprission";
        }
    }

    





}
