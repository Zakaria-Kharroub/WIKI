<?php

namespace App\Controller;

class HomeController {

    public function index(){
        

        $HomeModel = new \App\Model\HomeModel();  
        $wikis = $HomeModel->getWiki();
        include_once '../app/View/home.php';

    }
    

    public function login(){
        include_once '../app/View/login.php';
    }
    public function register(){
        include_once '../app/View/register.php';
    }
    public function organisateur(){
        include_once '../app/View/organisateurDash.php';
    }





}