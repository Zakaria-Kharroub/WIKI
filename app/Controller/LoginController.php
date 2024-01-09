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
                
                // header('location:?uri=home');
                if($_SESSION['role_id'] == 1){
                    header('location:?uri=admin');
                }
                else{
                    header('location:?uri=home');
                }
            }
            else{
                header('location:?uri=login');
            }
        }
        
    }



   
}