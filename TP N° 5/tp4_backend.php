<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tarea N°5</h1>
<h2>Programación: Backend Developer</h2>
<h3>Potrero Digital</h3>

    <hr>

<h4>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h4> 
  
    <?php

    //En este caso desprecié el 0.

        $array=[2, 4, 6, 8, 10, 12, 14,16,18, 20];

        foreach ($array as $value) {

           print "<p> $value </p>\n " ;

        }

    ?> 

    <br>
    <hr>

<h4>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
        matriz. Mostrar el esquema del array con print_r().</h4>

    <?php

    //En este ejercicio xampp me imprime el array horizontalmente, pero el editor online lo imprime verticalmente, por las dudas lo deé así.

        $array = ["Pedro", "Ana", 34, 1];

        print_r($array);
    ?>

    <br>
    <hr>

<h4>3. Crear un array asociativo e introducir los siguientes valores:
        Nombre: Pedro
        Apellido: Torres
        Dirección: Av. Mayor 3703
        Teléfono: 1122334455</h4>

    <?php

        $array = ['Nombre'=> "Pedro",'Apellido'=> "Torres", 'Dirección'=> "Av. Mayo 3703", 'Teléfono'=> 1122334455];

        //La consigna no decía mostrar ni cómo, por las dudas dejo las opciones..

       foreach ($array as $key => $value) {
            print "<p>$key: $value</p>\n";
       }
        
            print_r($array);
    ?>

    <br>
    <hr>

<h4>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
        Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h4>

    <?php

     $array = ["Madrid", "Barcelona","Londres", "New York", "Los Ängeles", "Chicago"];

     foreach ($array as $key => $value) {

        print ("<p>La ciudad con el índice $key tiene el nombre de $value.</p>\n");

     }

    ?>

    <br>
    <hr>

<h4>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
        LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
        Ejemplo: El índice de Madrid es MD.</h4>

        <?php

        $array = ['MD' => "Madrir", 'BCL' =>"Barcelona",'LD' =>"Londres", 'NY' =>"New York",'LA' =>"Los Ángeles", 'CCG' =>"Chicago"];

        foreach ($array as $key => $value) {

            print ("<p>El índice de $value es $key.</p>\n");
    
         }
        ?>
</body>
</html>