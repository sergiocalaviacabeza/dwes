<?php

class App {
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