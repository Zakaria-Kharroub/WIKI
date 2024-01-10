<?php

namespace App\Controller;

class adminController{
    public function index(){
        include_once '../app/View/admin/admin.php';
    }
    public function categorie(){
        include_once '../app/View/admin/categorie.php';
    }
    public function tag(){
        include_once '../app/View/admin/tag.php';
    }
    public function wikiAdmin(){
        include_once '../app/View/admin/wikiAdmin.php';
    }
}