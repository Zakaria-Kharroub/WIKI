<?php

namespace App\Controller;
use App\Model\OrganisateurModel;

class OrganisateurController {

    public function index(){
        $organisateurModel = new \App\Model\OrganisateurModel();
        $events= $organisateurModel ->getEvents();
        // dump($events);
        // die();
        include_once '../app/View/organisateurDash.php';
    }

    // public function affichEvent(){
    //   $organisateurModel = new \App\Model\OrganisateurModel();
    //   $events= $organisateurModel ->getEvents();

    //   include_once '../app/View/organisateurDash.php';
    // }

    public function ajoutetEvent(){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $date_evenement = $_POST['date_evenement'];
            $lieu = $_POST['lieu'];
            $description = $_POST['description'];
            $disponibilite = $_POST['disponibilite'];
            $organisateurModel = new \App\Model\OrganisateurModel();
            $organisateurModel->setName($name);
            $organisateurModel->setDateEvenement($date_evenement);
            $organisateurModel->setLieu($lieu);
            $organisateurModel->setDescription($description);
            $organisateurModel->setDisponibilite($disponibilite);
            if( $organisateurModel->ajoutEvent()){
                header('location:?uri=organisateur');
            }
        }
    }


    public function deleteEvent($id){
        $organisateurModel = new \App\Model\OrganisateurModel();
        $organisateurModel->setId($id);
        if($organisateurModel->deleteEvent()){
            header('location:?uri=organisateur');
        }
    }


    
    

}