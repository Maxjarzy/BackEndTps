<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tarea N°4</h1>
<h2>Programación: Backend Developer</h2>
<h3>Potrero Digital</h3>
    <hr>


<ul>
    <li><h3>Mostrar los números del 1 al 100.</h3></li>

         <?php

              for ($i=1; $i < 101; $i++) { 

                  echo "<b> $i </b>";

             }

          ?>

             <br>
             <hr>

    <li><h3>Mostrar los números del 100 al 1.</h3></li>

          <?php

             $i=101;

            while ($i > 1) {

               $i--;

                echo "<b> $i </b>";

            }

          ?>

            <br>
            <hr>

    <li><h3>Mostrar los números pares del 1 al 100.</h3></li>

           <?php

            $i=0;

            $par = 2;

            do {

                $i= $i+$par;
                echo "<b> $i </b>";

                

            } while ($i < 100);

          ?>

            <br>
            <hr>

    <li><h3>Mostrar los números impares del 1 al 100.</h3></li>

         <?php

            $i=1;

            $par = 2;

            do {

                echo "<b> $i </b>";

                $i= $i+$par;

            } while ($i <= 100);

        ?>

            <br>
            <hr>

    <li><h3>Mostrar la suma de los números de 1 a 20.</h3></li>
    
        <?php
        $suma = 0;

        for ($i=0; $i <= 20 ; $i++) { 

            $suma = $suma + $i;    

        }
        echo "<b> $suma </b>";


        ?>

            <br>
            <hr>

    <li><h3>Mostrar la suma de números pares de 1 a 20.</h3></li>

    <?php

            $i=0;

            $par = 2;

            $sumapares = 0;

            do {

                $i= $i+$par;
                $sumapares = $sumapares + $i;
                

            } while ($i < 20);

            echo "<b> $sumapares </b>";
          ?>

            <br>
            <hr>
</ul>
</body>
</html>