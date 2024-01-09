<?php
namespace App\Controller;


 class LogoutController{
    public function index(){
        header('location:?uri=home');
    }
    public function logout(){
        $logout = new \App\Model\AuthentModel();
        $logout->logout();
        header('location:?uri=home');
    }
}