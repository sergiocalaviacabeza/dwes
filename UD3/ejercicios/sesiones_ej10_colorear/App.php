<?php

class App {

  public function __construct()
  {
    session_start();
  }

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'home';
    }  
    $this->$method();      
  }

  public function home()
  {
    if (!isset($_COOKIE['color'])) {
      header('Location: ?method=colores');
      return;
    }
  
    include('views/home.php');
  }

  public function ejemplo1()
  {
    $ancho = $_GET['ancho'];
    $alto = $_GET['alto'];
    $_SESSION['ancho']=$ancho; //meter en la sesión una variable
    $_SESSION['alto']=$alto;
    $_SESSION['superficie']=$ancho*$alto;
  }

  public function ejemplo2()
  {
    $superficie = $_SESSION['superficie'];

    echo "La superficie guardada es" . $superficie;

    echo "La superficie guardada es" . $_SESSION['superficie'];

    unset ($_SESSION['superficie']); //todo lo que sean funciones siempre entre paréntesis

    session_destroy(); 
  }

  public function colores()
  {  
    include('views/colores.php');
  }

  public function cambio()
  { 
    //coger el color seleccionado por el usuario de $GET o $_POST
    $new = $_POST['color'];
    setcookie('color', $new, time() + 60*60*2);
    header('Location: ?method=home');
  }

}