<?php
namespace App\Controller;

class AuthorController{

    public function index(){

        $AuthorModel = new \App\Model\AuthorModel();
        $wikis = $AuthorModel->getWikiByAuthorId();
        // var_dump($wikis);
        $categories = $AuthorModel->getCategories();
        // var_dump($categories);

        $tags= $AuthorModel->getTags();
        // var_dump($tags);
        
        include_once '../app/View/author.php';
    }
 
    /*--------- crd wiki ---------*/

    public function ajouterWikis(){
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $author_id = $_SESSION['id'];
            $tag_id = $_POST['tag_id'];
            $etat = $_POST['etat'];
            $AuthorModel = new \App\Model\AuthorModel();
            $AuthorModel->setTitle($title);
            $AuthorModel->setDescription($description);
            $AuthorModel->setCategoryId($category_id);
            $AuthorModel->setAuthorId($author_id);
            $AuthorModel->setEtat($etat);
            $AuthorModel->setTagId($tag_id);
            if($AuthorModel->ajouterWiki()){
                header('Location: /wiki/public/author?uri=author');
                exit();
            }
        }
    }

    public function deleteWiki($id){
        $AuthorModel = new \App\Model\AuthorModel();
        $AuthorModel->setId($id);
        if($AuthorModel->deleteWiki()){
            header('Location: /wiki/public/author?uri=author');
            exit();
        }
    }




    // public function updateWiki($id){
    //     if(isset($_POST['sumit'])){
    //         $title = $_POST['title'];
    //         $description= $_POST['description'];
    //         $category_id = $_POST['category_id'];

    //         $tag_id = $_POST['tag_id'];

    //         $AuthorModel = new \App\Model\AuthorModel();

    //         $AuthorModel->setId($id);
    //         $AuthorModel->setTitle($title);
    //         $AuthorModel->setDescription($description);
    //         $AuthorModel->setCategoryId($category_id);
    //         $AuthorModel->setTagId($tag_id);
    //         var_dump($AuthorModel);
    //         die();
    //         if($AuthorModel->updateWiki()){
    //             header('Location: /wiki/public/author?uri=author');
    //             exit();
    //         }


    //     }
    // }





  













}