<?php
 
        $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");
        mysqli_select_db($conexion,"n260m_32928476_tienda");


        $tipo_prenda = $_POST ['tipo_de_prenda'];
        $marca = $_POST['marca'];
        $talle = $_POST['talle'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
        $link = $_POST['link'];
  
        $consulta = "INSERT INTO ropa (id,tipo_de_prenda,marca,talle,precio,imagen,link) VALUES ('','$tipo_prenda','$marca','$talle','$precio','$imagen', '$link')";

  
        mysqli_query($conexion,$consulta);

 
        header('location: todos.php');

?>






