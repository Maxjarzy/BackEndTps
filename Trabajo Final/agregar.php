<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <title>Tienda piola | Agregar Artículo</title>
    </head>
    <body>

    <h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>

    <h2>Agregar artículo</h2>

<?php
        session_start();
        $usuario = $_SESSION['USERNAME'];

        if(!isset($usuario)){

            header("location: login.php");
        }

?>

        <form method="POST" action="alta.php" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="prenda_form">Tipo de prenda</label>
                  <input type="text" class="form-control" name="tipo_de_prenda" id="prenda_form"  placeholder="Ej: Buzo">
              </div>
              <div class="form-group">
                  <label for="marca_form">Marca</label>
                  <input type="text" class="form-control" name="marca" id="marca_form" placeholder="Ej: Nike">
              </div>
              <div class="form-group">
                  <label for="talle_form">Talle</label>
                  <input type="text" class="form-control" name="talle" id="talle_form" placeholder="Ej: XL">
              </div>
              <div class="form-group">
                  <label for="precio_form">Precio</label>
                  <input type="text" class="form-control" name="precio" id="precio_form" placeholder="Ej: 5000">
              </div>
              <div class="form-group">
                  <label for="link_form">Link de pago</label>
                  <input type="text" class="form-control" name="link" id="link_form" placeholder="Ej: https://www.mercadopago.com.ar/">
              </div>
              <div class="form-group">
                  <label for="file_form">Imagen del producto</label>
                  <input type="file" class="form-control-file" name="imagen" id="file_form">
              </div>
              

              <input class ="btn btn-primary boton" type="submit" name="submit" value="Ingresar">
        </form>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>