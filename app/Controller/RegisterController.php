<?php

namespace App\Controller;

class RegisterController {

    public function index(){
        include_once '../app/View/register.php';
    }
    public function registeruser(){

     
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $id_role = $_POST['id_role'];

            $register = new \App\Model\AuthentModel();
            $register->setName($name);
            $register->setEmail($email);
            $register->setPassword($password);
            $register->setIdRole($id_role);
           if( $register->register()){
            header('location:?uri=login');
           }
         
        }
    }

    

}