<?php
   

        $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");
        mysqli_select_db($conexion,"n260m_32928476_tienda");

        session_start();

        $usuario = $_SESSION['USERNAME'];

        if(!isset($usuario)){

            header("location: login.php");
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <title>Tienda piola | Eliminar usuario</title>
    </head>
    <body>
      

        <h2>Eliminar usuario</h2>
        
        <form method="POST" action="" >
             <div class="form-group">
                  <label for="usuario_elimado">Usuario a eliminar</label>
                  <input type="text" class="form-control" name="usuario_eliminar" id="usuario_eliminado"  placeholder="Ej: CRodriguez ">
             </div>
           
             <input class ="btn btn-primary boton" type="submit" name="submit" value="Eliminar">
            
        </form>
<?php
       
 

   

    if(isset($_POST["submit"])){
    
        $conexion=mysqli_connect("sql110.260mb.net","n260m_32928476","gshk74xt");
        mysqli_select_db($conexion,"n260m_32928476_tienda");

        $usuario=$_POST['usuario_eliminar'];

        $consulta="SELECT * FROM usuarios WHERE usuario = '$usuario'";

        $resultado= mysqli_query($conexion,$consulta);

        $datos=mysqli_fetch_array($resultado);

        $usuariodb=$datos['usuario'];
        
        if($usuario == ""){
            echo "";

        }
        elseif($usuario == $usuariodb){

            $consulta="DELETE FROM usuarios WHERE usuario = '$usuario'";
            mysqli_query($conexion,$consulta);

            echo "<h2>Elusuario $usuario fué eliminado correctamenre!</h2>";?>
<?php


        }
        else{
            echo "<h2>El usuario $usuario no existe</h2>";
        }
    }
?>

    </body>
</html>
