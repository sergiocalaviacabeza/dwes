<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    //
    public function hola()
    {
        return "Hola desde PruebaController de test";
    }

    public function saludoCompleto($name){
        return "Hola $name. Estamos haciendo pruebas desde test";
    }
}
