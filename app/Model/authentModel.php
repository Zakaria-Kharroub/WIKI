<?php

namespace App\Model;



use App\Database\Database;
use PDO ;

class AuthentModel {
    private $db;

    protected $name;
    protected $email;
    protected $password;
    protected $id_role;

    public function __construct() {
        $this->db = new Database();
    }

    public function getName() {
        return $this->name;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getIdRole(){
        return $this->id_role=$id_role;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function setEmail($email) {
        $this->email = $email;
    } 
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setIdRole($id_role){
        $this->id_role=$id_role;
    }


    public function register(){
        $query= "INSERT INTO `utilisateurs`( `name`, `email`, `password`, `ID_Role`) VALUES  (?,?,?,?)";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt ->execute([$this->getName(),$this->getEmail(),$this->getPassword(),1]);
        if($stmt){
            return true;
        }   
     
    }


    public function login(){
        $query = "SELECT * FROM `utilisateurs` WHERE email = ? AND password = ?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->execute([$this->getEmail(),$this->getPassword()]);
        $user = $stmt->fetch(PDO::FETCH_OBJ);
        // var_dump($user);
        
            $_SESSION['id'] = $user->id;
            $_SESSION['name'] = $user->name;
            $_SESSION['email']=$user->email;
            // var_dump($_SESSION);
           
            
            return true;
    }
    


    
}