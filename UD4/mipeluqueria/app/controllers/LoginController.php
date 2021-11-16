<?php

/**
*
*/
class LoginController
{

    function __construct()
    {
        echo "LoginController -> construct <br>";
    }

    public function index()
    {
        require "app/views/login.php";

    }
}

