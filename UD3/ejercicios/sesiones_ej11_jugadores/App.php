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
    if(isset($_SESSION['jugadores'])){
      $jugadores = $_SESSION['jugadores'];
    }else{
      $jugadores = [];
    }

    include ('views/home.php');    
  }

  public function new()
  {
    if(!isset($_POST['new'])){
      header('Location: index.php?method=home');
      return;
    }
    $new = $_POST['new'];
    if (isset($_SESSION['jugadores'])){
      $jugadores = $_SESSION['jugadores'];
    }else{
      $jugadores=[];
    }
    $jugadores[]= $new;
    $_SESSION ['jugadores']= $jugadores;
    header('Location: index.php?method=home'); 
  }

  public function delete()
  {
    if (isset($_SESSION['jugadores'])){
      $jugadores = $_SESSION['jugadores'];
    }else{
      $jugadores=[];
    }
    $key = $_GET['key'];
    // echo $key; exit();
    unset($jugadores[$key]);
    // var_dump($jugadores);exit();
    $_SESSION ['jugadores'] = $jugadores;
    header('Location: index.php?method=home');
  }

  public function empty()
  {
    unset($_SESSION['jugadores']);
    // session_destroy();
    header('Location: index.php?method=home');
  }

  public function close()
  {
    
  }

}
