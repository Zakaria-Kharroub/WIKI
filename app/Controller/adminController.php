<?php

namespace App\Controller;

class adminController{

    public function index(){
        include_once '../app/View/admin/admin.php';
    }


    public function categorie(){
        // var_dump($_SERVER['REQUEST_METHOD']);
        //     die();
        $adminModel = new \App\Model\AdminModel();
        $categories = $adminModel->sameCategories();
        include_once '../app/View/admin/categorie.php';
    }


    public function tag(){
        $adminModel = new \App\Model\AdminModel();
        $tags = $adminModel->sameTags();
        include_once '../app/View/admin/tag.php';
    }




    public function wikiAdmin(){
        $adminModel = new \App\Model\AdminModel();
        $wikis = $adminModel->sameWiki();
        include_once '../app/View/admin/wikiAdmin.php';
    }

    public function ajouterTages(){

    }

    // old code 
public function ajouterCategories(){
    if(isset($_POST['submit'])){
        $category_name = $_POST['category_name'];
        $adminModel = new \App\Model\AdminModel();
        $adminModel->setCategoryName($category_name);
        if($adminModel->ajouterCategorie()){
            header('Location: /wiki/public/admin?uri=admin/categorie');
            exit();
        }
    }
}














}