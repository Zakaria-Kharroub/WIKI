<?php
namespace App\Model;

use App\Database\Database;
use PDO ;


class adminModel extends HomeModel{
    
    protected $id_category; 
    protected $category_name;

    public function getCategoryName(){
        return $this->category_name;
    }
    public function setCategoryName($category_name){
        $this->category_name=$category_name;
    }

    public function sameWiki(){
        $wikis = $this->getWiki();
        return $wikis;
    }
    public function sameCategories(){
        $categories = $this->getCategories();
        return $categories;
    }
    public function sameTags(){
        $tags = $this->getTags();
        return $tags;
    }


/*------------- crud categories -----------------*/
    // old code 
    public function ajouterCategorie(){
        $sql="INSERT INTO `categories`( `category_name`) VALUES (?)";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([$this->getCategoryName()]);
        if($stmt){
           return true;
        }else{
            echo "error de ajouter";
        }

    }

    /*----- other code pour resoudre le problem de ajouter categorie----- */
    // public function ajouterCategorie(){
    //     $sql="INSERT INTO `categories`( `category_name`) VALUES (?)";
    //     $stmt = $this->db->getConnection()->prepare($sql);
    //     $stmt->execute([$this->getCategoryName()]);
    //     if($stmt){
    //        header('Location: /wiki/public/admin?uri=admin/categorie');
    //        exit();
    //     }else{
    //         echo "error de ajouter";
    //     }
    // }



    
   



}
