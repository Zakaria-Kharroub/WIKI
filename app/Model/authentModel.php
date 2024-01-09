<?php

namespace App\Model;



use App\Database\Database;
use PDO ;

class AuthentModel {
    private $db;
    protected $username;
    protected $email;
    protected $password;
    protected $id_role;


    public function __construct() {
        $this->db = new Database();
    }

    
    public function getUsername() {
        return $this->username;
    }

    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getIdRole(){
        return $this->id_role;
    }


    public function setUsername($username) {
        $this->username = $username;
    }
    public function setEmail($email){
        $this->email= $email;
    }
    public function setPassword($password){
        $this->password =$password;
    }
    public function setIdRole($id_role){
        $this->id_role=$id_role;
    }

    public function register() {
        $query = "INSERT INTO `utilisateurs` (`username`, `email`, `password`, `role_id`) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->getConnection()->prepare($query);
        $hashedPassword = password_hash($this->getPassword(), PASSWORD_DEFAULT);
        $stmt->execute([$this->getUsername(), $this->getEmail(), $hashedPassword, 2]);
        if ($stmt) {
            return true;
        }
    }
    

    public function login(){
        $query = "SELECT * FROM `utilisateurs` WHERE email = :email";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bindParam(':email', $this->getEmail());
        $stmt->execute();
    
        $user = $stmt->fetch(PDO::FETCH_OBJ);
    
        if ($user && password_verify($this->getPassword(), $user->password)) {
            $_SESSION['id'] = $user->user_id; 
            $_SESSION['username'] = $user->username;
            // $_SESSION['email'] = $user->email;
    
            return true;
        } else {
            return false;
        }
    }

    

    
}