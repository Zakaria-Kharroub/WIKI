<?php

 class LogoutController{
    public function index(){
        session_destroy();
        header('location:?uri=login');
    }
}