<?php

namespace App\Controllers;

class FormularioController
{
    function __construct()
    {
        echo "HomeController -> construct <br>";
    }
    public function recogerTrabajador()
    {
        $_SESSION['nombre_trab']=$_POST['nombre'];
        $_SESSION['apellidos_trab']=$_POST['apellidos'];
        $_SESSION['telefono_trab']=$_POST['telefono'];
        $_SESSION['cat_trab']=$_POST['cat'];
        $_SESSION['cuenta_trab']=$_POST['cuenta'];
        
        require "app/views/mostrar_trabajador.php";  
    }

    public function recogerContacto()
    {
        $_SESSION['nombre']=$_POST['nombre'];
        $_SESSION['apellidos']=$_POST['apellidos'];
        $_SESSION['correo']=$_POST['correo'];
        $_SESSION['asunto']=$_POST['asunto'];
        $_SESSION['mensaje']=$_POST['mensaje'];
        
        require "app/views/mostrar_contacto.php";
    }

    public function recogerLogin()
    {
        $_SESSION['usuario']=$_POST['usuario'];
        $_SESSION['password']=$_POST['password'];

        require "app/views/mostrar_login.php";
    }
}