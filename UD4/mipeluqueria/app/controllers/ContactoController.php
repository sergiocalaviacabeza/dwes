<?php

namespace App\Controllers;

class ContactoController
{

    function __construct()
    {
        echo "ContactoController -> construct <br>";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        require "app/views/contacto.php";
    }
}

