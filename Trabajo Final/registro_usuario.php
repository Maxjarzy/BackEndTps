<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Tienda piola | Generar usuario</title>
</head>
<body>

<?php
    session_start();
    $usuario = $_SESSION['USERNAME'];

    if(!isset($usuario)){

        header("location: login.php");
    }

?>

<h1>Tienda piola <i class="em em-call_me_hand" aria-role="presentation" aria-label="CALL ME HAND"></i> </h1>

<h2>Generar usuario<h2>

    <form action="" method="POST">

        <div class="mb-3">
          <label for="usuario-nuevo-nombre" class="form-label">Nombre empleado</label>
          <input type="text" class="form-control" id="usuario-nuevo-nombre" name="nombre" placeholder="Ej: Cristian Rodriguez" required >
        </div>

        <div class="mb-3">
          <label for="usuario-nuevo" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario-nuevo" name="usuario" placeholder="Ej: CRodriguez" required>
        </div>
        
        <div class="mb-3">
          <label for="usuario-nuevo-contrasenia" class="form-label">Contraseña</label>
          <input type="text" class="form-control" id="usuario-nuevo-contrasenia" name="contrasenia" placeholder="******" required>
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary boton">Generar</button>
        <a class="btn btn-secondary boton" href="todos.php" role="button"  aria-expanded="false"> Volver al administrador</a>

      </form>


<?php



 
    if(isset($_POST["submit"])){
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
        $nombre= $_POST['nombre'];

        $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");
        mysqli_select_db($conexion,"n260m_32928476_tienda");

        $usuario=$_POST['usuario'];

        $consulta="SELECT * FROM usuarios WHERE usuario = '$usuario'";

        $resultado= mysqli_query($conexion,$consulta);

        $datos=mysqli_fetch_array($resultado);

        $usuariodb=$datos['usuario'];
        

         if($usuario == ""){
            echo "";

        }
        elseif($usuario == $usuariodb){
            echo "El usuario ya está registrado! Elija otro nombre de usuario.";
        }
        else{
             $consulta = "INSERT INTO usuarios (id,nombre,usuario,contrasenia) VALUES ('', '$nombre', '$usuario', '$contrasenia')";

             mysqli_query($conexion,$consulta);

            echo "El usuario fué creado correctamente.";
        }


    }
       
?>
</body>
</html>