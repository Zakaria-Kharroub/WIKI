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

/*---------- start CRUD categories -----------------*/
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
public function updateCategorie($id){
    if (isset($_POST['submit'])){
        $category_name = $_POST['category_name'];
        $adminModel = new \App\Model\AdminModel();
        $adminModel->setIdCategory($id);
        $adminModel->setCategoryName($category_name);
        if($adminModel->updateCategorie()){
            header('Location: /wiki/public/admin?uri=admin/categorie');
            exit();
        }
        
    } 
}
public function deleteCategorie($id){
    $adminModel = new \App\Model\AdminModel();
    $adminModel->setIdCategory($id);
    if($adminModel->deleteCategorie()){
        header('Location: /wiki/public/admin?uri=admin/categorie');
        exit();
    }
}
/*---------- end CRUD categories -----------------*/



/*---------- start CRUD tags -----------------*/
public function ajouterTags(){
    if(isset($_POST['submit'])){
        $tag_name = $_POST['tag_name'];
        $adminModel = new \App\Model\AdminModel();
        $adminModel->setTagName($tag_name);
        if($adminModel->ajouterTag()){
            header('Location: /wiki/public/admin?uri=admin/tag');
            exit();
        }
    }
}

public function deleteTag($id){
    $adminModel = new \App\Model\AdminModel();
    $adminModel->setIdTag($id);
    if($adminModel->deleteTag()){
        header('Location: /wiki/public/admin?uri=admin/tag');
        exit();
    }
}


public function updateTag($id){
    if (isset($_POST['submit'])){
        $tag_name = $_POST['tag_name'];
        $adminModel = new \App\Model\AdminModel();
        $adminModel->setIdTag($id);
        $adminModel->setTagName($tag_name);
        if($adminModel->updateTag()){
            header('Location: /wiki/public/admin?uri=admin/tag');
            exit();
        }
        
    } 
}














}