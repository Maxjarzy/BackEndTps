<?php

$email = $_POST ["email"];
$clave = $_POST ["clave"];


$user = "potrerodigital@compromiso.org";
$pass = "potrerodigital";


    if ($email == $user && $clave == $pass) {

        header ("location: https://www.potrerodigital.org/ " );

        }

    else{

        header ("location: error.html");
        
    }


?>