<?php
namespace App\Model;

use App\Database\Database;
use PDO ;

class HomeModel{
    protected $db;
    protected $id ;
    protected $title ;
    protected $description;
    protected $image;
    protected $author_id;
    protected $category_id;
    protected $date_create;
    protected $etat;




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
    public function getEtat(){
        return $this->etat;
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
    public function setEtat($etat){
        $this->etat=$etat;
    }

 
    public function getWiki(){
        $sql = "SELECT wikis.*, utilisateurs.username AS author_name, categories.category_name
                FROM wikis
                JOIN utilisateurs ON wikis.author_id = utilisateurs.user_id
                JOIN categories ON wikis.category_id = categories.category_id
                WHERE wikis.etat = 'oui'";
        
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





    /*----------- requette simpl pour afficher just les donne de table wiki------*/
    // public function getWikiById($id){
    //     $sql = "SELECT * FROM wikis WHERE wiki_id = ?";
    //     $stmt = $this->db->getConnection()->prepare($sql);
    //     $stmt->execute([$id]);
    //     return $stmt->fetch(PDO::FETCH_OBJ);
    // }



    /*----------- requette avec join pour afficher author name et les tag et les tags------*/

    public function getWikiById($id){
        $sql = "SELECT wikis.*, utilisateurs.username AS author_name, categories.category_name, GROUP_CONCAT(tags.tag_name) AS tag_names
                FROM wikis
                JOIN utilisateurs ON wikis.author_id = utilisateurs.user_id
                JOIN categories ON wikis.category_id = categories.category_id
                LEFT JOIN wiki_tags ON wikis.wiki_id = wiki_tags.wiki_id
                LEFT JOIN tags ON wiki_tags.tag_id = tags.tag_id
                WHERE wikis.wiki_id = ?
                GROUP BY wikis.wiki_id";
    
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }




    public function searchByName($searchTerm) {
        $conn = $this->db->getConnection();
        $sql = "SELECT wikis.*, utilisateurs.username AS author_name
        FROM wikis
        JOIN utilisateurs ON wikis.author_id = utilisateurs.user_id
        WHERE wikis.title LIKE ? AND wikis.etat = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute(["%$searchTerm%", 'oui']);
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        if ($result) {
            return $result;
        }
    }


    



}
