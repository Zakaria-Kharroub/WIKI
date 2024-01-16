<?php
namespace App\Model;

use App\Database\Database;
use PDO ;


class adminModel extends HomeModel{
    
    protected $id_category; 
    protected $category_name;
    protected $tag_id;
    protected $tag_name;

    // ----categorie
    public function getIdCategory(){
        return $this->id_category;
    }
    public function getCategoryName(){
        return $this->category_name;
    }

    // ---- tags
    public function getIdTag(){
        return $this->tag_id;
    }
    public function getTagName(){
        return $this->tag_name;
    }

    // seters
    // ---- categorie
    public function setIdCategory($id_category){
        $this->id_category=$id_category;
    }
    public function setCategoryName($category_name){
        $this->category_name=$category_name;
    }
    // ---- tags
    public function setIdTag($tag_id){
        $this->tag_id=$tag_id;
    }
    public function setTagName($tag_name){
        $this->tag_name=$tag_name;
    }




    public function sameWiki(){
        $sql = "SELECT wikis.*, utilisateurs.username AS author_name, categories.category_name
                FROM wikis
                JOIN utilisateurs ON wikis.author_id = utilisateurs.user_id
                JOIN categories ON wikis.category_id = categories.category_id";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute();
        
        $wikis = $stmt->fetchAll(PDO::FETCH_OBJ);
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

    public function getUser(){
        $sql = "SELECT * FROM utilisateurs";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }


/*------------- start crud categories -----------------*/
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



    public function deleteCategorie(){
        $sql = "DELETE FROM `categories` WHERE category_id = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([$this->getIdCategory()]);
        if($stmt){
            return true;
        }else{
            echo "error de delete";
        }
    }

    public function updateCategorie(){
        $sql = "UPDATE `categories` SET `category_name`=? WHERE category_id = ?";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([$this->getCategoryName(),$this->getIdCategory()]);
        if($stmt){
            return true;
        }else{
            echo "error de update";
        }
    }

/*-------------end crud categories -----------------*/




/*------------- crud tags -----------------*/
public function ajoutertag(){
    $sql="INSERT INTO `tags`( `tag_name`) VALUES (?)";
    $stmt = $this->db->getConnection()->prepare($sql);
    $stmt->execute([$this->getTagName()]);
    if($stmt){
       return true;
    }else{
        echo "error de ajouter";
    }
}


public function deleteTag(){
    $sql = "DELETE FROM `tags` WHERE tag_id = ?";
    $stmt = $this->db->getConnection()->prepare($sql);
    $stmt->execute([$this->getIdTag()]);
    if($stmt){
        return true;
    }else{
        echo "error de delete";
    }
}

public function updateTag(){
    $sql = "UPDATE `tags` SET `tag_name`=? WHERE tag_id = ?";
    $stmt = $this->db->getConnection()->prepare($sql);
    $stmt->execute([$this->getTagName(),$this->getIdTag()]);
    if($stmt){
        return true;
    }else{
        echo "error de update";
    }
}


public function updateEtat(){
    $sql = "UPDATE `wikis` SET `etat`=? WHERE wiki_id = ?";
    $stmt = $this->db->getConnection()->prepare($sql);
    $stmt->execute([$this->getEtat(),$this->getId()]);
    if($stmt){
        return true;
    }else{
        echo "error de update";
    }
}







}
