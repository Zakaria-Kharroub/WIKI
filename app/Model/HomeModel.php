<?php
namespace App\Model;

use App\Database\Database;
use PDO ;

class HomeModel{
    private $db;
    protected $id ;
    protected $title ;
    protected $description;
    protected $image;
    protected $author_id;
    protected $category_id;
    protected $date_create;




    public function __construct() {
        $this->db = new Database();
    }

//    geters
    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getImage(){
        return $this->image;
    }
    public function getAuthorId(){
        return $this->author_id;
    }
    public function getCategoryId(){
        return $this->category_id;
    }
    public function getDateCreate(){
        return $this->date_create;
    }

    // seters

    public function setId($id){
        $this->id=$id;
    }
    public function setTitle($title){
        $this->title=$title;
    }
    public function setDescription($description){
        $this->description=$description;
    }
    public function setImage($image){
        $this->image=$image;
    }
    public function setAuthorId($author_id){
        $this->author_id=$author_id;
    }
    public function setCategoryId($category_id){
        $this->category_id=$category_id;
    }
    public function setDateCreate($date_create){
        $this->date_create=$date_create;
    }

 
    public function getWiki(){
        $sql = "SELECT wikis.*, utilisateurs.username AS author_name, categories.category_name
                FROM wikis
                JOIN utilisateurs ON wikis.author_id = utilisateurs.user_id
                JOIN categories ON wikis.category_id = categories.category_id";
        
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute();
        
        $wikis = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $wikis;
    }


    public function getCategories(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    public function getTags(){
        $sql = "SELECT * FROM tags";
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute();
        $tags = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $tags;

    }


}