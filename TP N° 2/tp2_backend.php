<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tarea N°3</h1>
<h2>Programación: Backend Developer</h2>
<h3>Potrero Digital</h3>

<br>    
<hr>

<h3>Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios:</h3>

    

<ul>
    <li><b>1. Crear una variable n y validar que sea un número positivo.</b></li>

    <br>

        <?php

           $variable = rand(-10,10);

            if ($variable > 0) {
                
                echo "El número $variable es positvo.";
            }

            else if ($variable == 0) {

                echo "El número $variable es un número neutro ";

            }

            else {

                echo "El número $variable es negativo.";

            }
            
        ?>

    <br>
    <br>
    <hr>

    <li><b>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</b></li>
    
    <br>


        <?php

           $variable2 = rand(1,10);

           if (($variable2 > 1) && ($variable2 < 10)) {
            
                echo "El número $variable2 está entre 1 y 10.";

           }
           
           else {

            echo "El número $variable2 no se encuentra dentro del rango determinado.";

           }

        ?>

    <br>
    <br>
    <hr>

    <li><b>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</b></li>
    
    <br>


        <?php

            $variable3 = 115;

            if (($variable3 > 10) ||($variable3 < 2)){
                
                echo "El número $variable3 se encuentra dentro de los rangos determinados.";

            }

            else {

                echo "El número $variable3 no se encuentra dentro de los rangos determinados.";

            }

        ?>

    <br>
    <br>
    <hr>

    <li><b>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
    mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
    mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
    numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.</b></li>

    <br>


        <?php

            $numero1 = rand(1,10);
            $numero2 = rand(1,10);

            if ( $numero1 > $numero2) {
                
                echo " Los numeros son: $numero1 y $numero2 <br>";
                echo "La suma de los números es: " .$numero1+$numero2  ;
                echo "<br> La resta de los números puede ser: " .$numero1 - $numero2. ".O también " .$numero2 - $numero1. ", dependiendo del orden de factores." ;

            }

            else if ($numero1 < $numero2) {

                echo " Los numeros son: $numero1 y $numero2 <br>";
                echo "La multiplicación de los números es: " .$numero1 * $numero2. ".<br>";
                echo "La division entera de los números puede ser: " .floor($numero2/$numero1). ", con resto: " .$numero2%$numero1. ". O sino, ".floor($numero1/$numero2). " con resto ".$numero1%$numero2. ".<br>" ;
                
            }

            else{

                echo "Los números son iguales.";
            }
           
        ?>

    <br>
    <br>
    <hr>
</ul>







</body>
</html>