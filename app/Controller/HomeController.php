<?php

namespace App\Controller;

class HomeController {

    public function index(){
        

        $HomeModel = new \App\Model\HomeModel();

        $wikis = $HomeModel->getWiki();
        $categories = $HomeModel->getCategories();
        include_once '../app/View/home.php';

    }
    

    public function login(){
        include_once '../app/View/login.php';
    }
    public function register(){
        include_once '../app/View/register.php';
    }

    public function author(){
        include_once '../app/View/author.php';
    }



    public function organisateur(){
        include_once '../app/View/organisateurDash.php';
    }
    public function logout(){
        header('location:?uri=home');
    }
    public function categorie(){
        include_once '../app/View/categorie.php';
    }
  


    public function wikiDetail($id){
        $HomeModel = new \App\Model\HomeModel();
        $wiki = $HomeModel->getWikiById($id);
        $categories = $HomeModel->getCategories();
        include_once '../app/View/wikiDetail.php';
    }





}