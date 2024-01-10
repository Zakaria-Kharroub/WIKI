<?php

namespace App\Controller;

class adminController{

    public function index(){
        include_once '../app/View/admin/admin.php';
    }


    public function categorie(){
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



}