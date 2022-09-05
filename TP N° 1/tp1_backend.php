<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Trabajo practico N°1</h1>
<h2>Programación: Backend Developer</h2>
<h3>Potrero Digital</h3>

<hr>

<h3>1. Imprima por pantalla: “Hola mundo”.</h3>

<?php 

    echo "Hola mundo";

?>

<br>
<hr>

<h3>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</h3>

<?php 

    $saludo ="Hola mundo";

    echo $saludo;

?>

<br>
<hr>

<h3>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
entera y el resto de la división entera.</h3>

    <?php 

       $entero1 = 35;
       $entero2 = 8;

      echo "Las variables son: " . $entero1 ." y " . $entero2;

    ?>

    <br>
    <br>

    <?php

         $suma = $entero1 + $entero2;

         echo "La suma de las variables es: " .$suma;


    ?>

    <br>
    <br>

    <?php

        $resta = $entero1 - $entero2;
        $resta_dos = $entero2 - $entero1;

        echo "La resta de las variables pueden ser: "  . $resta . " o " . $resta_dos . " dependiendo del orden de los factores."

    ?>

    <br>
    <br>

    <?php

        $multiplicacion = $entero1 * $entero2;

        echo "La multiplicación de las variables es: " . $multiplicacion ;

    ?>

    <br>
    <br>

    <?php

        $division = $entero1 / $entero2;
        $division_dos= $entero2 / $entero1;

        echo "La division entera de las variables pueden ser: " . floor($division) . " con resto " . ($entero1 % $entero2) . " o también " . floor($division_dos) . " con resto " . ($entero2 % $entero1) . ", dependiendo del orden de los factores";

    ?>

    <br>
    <hr>
    
    <h3>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.</h3>

    <?php

        $temperatura = 20;
        $grados_fharenheit = ($temperatura * 9/5) + 32;

        echo "La temperatura correspondiente a 20° Celsius es: " . $grados_fharenheit . "°F";

    ?>

    <br>    
    <hr>

    <h3>5. Implementar algoritmos que permitan: </h3>

        <ul>
            <li><h4>Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</h4></li>
            <li><h4>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h4></li>
        </ul>
    
  <?php

        $base = 18; 
        $altura = 12;

        $perímetro = ($base*2)+($altura*2);
        $area = $base*$altura;

        echo "El perimero del rectángulo es " . $perímetro . " cm, mientras que su área es de: " . $area . " cm2.";
    
  ?>

    <br>
    <br>

  <?php

    $radio = 30;

    $perimetro = (2*pi()*$radio);
    $area_circulo = (pi()*($radio)**2);

    echo "El perimetro del circulo es: " . $perimetro . " cm, mientras que su área es: " . $area_circulo . " cm2.";

  ?>


</body>
</html>