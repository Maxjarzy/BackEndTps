<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda piola | Modificar Artículo</title>
</head>
<body>

<?php

    session_start();
    $usuario = $_SESSION['USERNAME'];

    if(!isset($usuario)){

        header("location: login.php");
    }



      $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");

      mysqli_select_db($conexion,"n260m_32928476_tienda");


      $id = $_GET['id'];


      $consulta = "SELECT * FROM ropa WHERE id=$id";


      $respuesta = mysqli_query($conexion, $consulta);


      $datos=mysqli_fetch_array($respuesta);
?>


<?php
        
        $tipo_prenda=$datos["tipo_de_prenda"];
        $marca=$datos["marca"];
        $talle=$datos["talle"];
        $precio=$datos["precio"];
        $imagen=$datos["imagen"];
        $link=$datos["link"];?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos de la prenda</p>

      <form action="" method="POST"  enctype="multipart/form-data">
            <div class="form-group">
                  <label for="prenda_form">Tipo de prenda</label>
                  <input type=text" class="form-control" name="tipo_prenda" id="prenda_form"  value="<?php echo "$tipo_prenda"; ?>">
            </div>
            <div class="form-group">
                  <label for="marca_form">Marca</label>
                  <input type="text" class="form-control" name="marca" id="marca_form" value="<?php echo "$marca"; ?>">
            </div>
            <div class="form-group">
                  <label for="talle_form">Talle</label>
                  <input type="text" class="form-control" name="talle" id="talle_form" value="<?php echo "$talle"; ?>">
            </div>
            <div class="form-group">
                  <label for="precio_form">Precio</label>
                  <input type="text" class="form-control" name="precio" id="precio_form" value="<?php echo "$precio"; ?>">
            </div>
            <div class="form-group">
                  <label for="link_form">Link de pago</label>
                  <input type="text" class="form-control" name="link" id="link_form" value="<?php echo "$link"; ?>">
            </div>
            <div class="form-group">
                  <label for="file_form">Imagen del producto</label>
                  <input type="file" class="form-control-file" name="imagen" id="file_form">
            </div>
            

            <input class ="btn btn-primary boton" type="submit" name="guardar_cambios" value="Guardar Cambios">
      </form>


        
       
<?php
        if(array_key_exists('guardar_cambios',$_POST)){

                    $tipo_prenda=$_POST['tipo_prenda'];
                    $marca=$_POST['marca'];
                    $talle=$_POST['talle'];
                    $precio=$_POST['precio'];
                    $imagen=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
                    $link=$_POST['link'];

             $consulta = "UPDATE ropa SET tipo_de_prenda='$tipo_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen', link='$link' WHERE id =$id";

             mysqli_query($conexion,$consulta);

            header('location: todos.php');

        }?>
</body>
</html>