<?php

    $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");

    mysqli_select_db($conexion,"n260m_32928476_tienda");
 
    $id = $_GET['id'];

    $consulta = "DELETE FROM `ropa` WHERE `id`=$id";

    mysqli_query($conexion,$consulta);

    header('location: todos.php');
?>