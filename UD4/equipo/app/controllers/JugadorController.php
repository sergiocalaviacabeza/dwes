<?php
namespace App\Controllers;

use App\Models\Jugador;
/**
*
*/
class JugadorController
{

    function __construct()
    {
        // echo "En JugadorController";
    }

    public function index()
    {
        //completar
        require "app/views/jugador/index.php";        
    }

    public function create()
    {
        require "app/views/jugador/create.php";
    }

    public function edit($arguments)
    {
        //Completar
        require "app/views/jugador/create.php";
    }

    public function store()
    {             
        //Completar
        header('Location: /jugador');
    }

    public function titular($arg)
    {
        //Completar
        header('Location: /jugador');
    }
    public function titulares()
    {
        //completar
        require "app/views/jugador/titulares.php";        
    }
    public function quitar($arg)
    {
        //Completar
        header('Location: /jugador/titulares');
    }
}
