<?php

namespace App\Controller;

class RegisterController {

    public function index(){
        include_once '../app/View/register.php';
    }

    public function registeruser(){
        if (isset($_POST['submit'])){
            $username=$_POST['username'];
            $email= $_POST['email'];
            $password =$_POST['password'];
            $id_role =$_POST['id_role'];

            $register = new \App\Model\AuthentModel();
            $register->setUsername($username);
            $register->setEmail($email);
            $register->setPassword($password);
            $register->setIdRole($id_role);
            if($register->register()){
               
                header('location:?uri=login');
                echo 'success';
                
            }
        }
    }

    

}