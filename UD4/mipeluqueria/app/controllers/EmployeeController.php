<?php

/**
*
*/
class EmployeeController
{

    function __construct()
    {
        echo "EmployeeController -> construct <br>";
    }

    public function index()
    {
        require "app/views/trabajador.php";

    }
}

