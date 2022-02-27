<?php

namespace App\Controllers;

use App\Models\Login;

require_once "app/models/Login.php";

class LoginController
{
    function index(){
        require "app/views/login/index.php"; 
    }

    function login()
    {
        $usuario = $_POST['users'];
        $contrasena = $_POST['passwords']; 
        $users = Login::all();
        $contador=0;
        foreach ($users as $key => $user){
            if($user->users==$usuario && $user->passwords==$contrasena){
                $_SESSION['user']=$usuario;
                $_SESSION['password']=$contrasena;
                $contador++;
                require "app/views/login/login.php"; 
            }
        }
        if($contador==0){
            require "app/views/login/index.php"; 
            echo "Usuario incorrecto"; 
        }
        
    } 

    function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['message']);
        session_destroy();
        require "app/views/login/index.php";
    }
}