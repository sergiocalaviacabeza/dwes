<?php
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
        $_SESSION['dni_trab']=$_POST['dni'];
        $_SESSION['cuenta_trab']=$_POST['cuenta'];
        $_SESSION['correo_trab']=$_POST['correo'];
        $_SESSION['ss_trab']=$_POST['ss'];
        $_SESSION['telefono_trab']=$_POST['telefono'];
        $_SESSION['direccion_trab']=$_POST['direccion'];
        $_SESSION['salario_trab']=$_POST['salario'];
        $_SESSION['fecha_trab']=$_POST['fecha'];
        $_SESSION['cat_trab']=$_POST['cat'];
        require "app/views/mostrar_trabajador.php";  
    }

    public function index()
    {
        $_SESSION['nombre']=$_POST['nombre'];
        $_SESSION['apellidos']=$_POST['apellidos'];
        $_SESSION['correo']=$_POST['correo'];
        $_SESSION['asunto']=$_POST['asunto'];
        $_SESSION['mensaje']=$_POST['mensaje'];
        require "app/views/mostrar.php";
    }
}