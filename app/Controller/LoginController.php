<?php

namespace App\Controller;
class loginController {

    public function index(){
        include_once '../app/View/login.php';
    }

    public function login(){
        // var_dump($_POST);
        if(isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = $_POST['password'];
            $login = new \App\Model\AuthentModel();
            $login->setEmail($email);
            $login->setPassword($password);
            $isLoginSuccessful = $login->login();
            if($isLoginSuccessful){
                header('location:?uri=home');
            }
        }
    }

   
}