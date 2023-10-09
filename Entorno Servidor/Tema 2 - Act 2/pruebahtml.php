<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba HTML con código PHP embebido</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>

    <h1>Trabajando con variables</h1>

    <!-- Aquí comenzamos el código en PHP -->

    <?php
        
        $varTexto = "Hola"; // Cadena de texto
        $varEntero = 31 ; // Entero
        $varBoolean = true; // Boolean
        $varFloat = 1.5; // Float
        $varArray = array ("1", "2", "3"); // Array

        // Mostramos en pantalla las variables que hemos creado

        echo "· Variable de tipo 'Cadena de texto': " . $varTexto . "</br>";
        echo "· Variable de tipo 'Entero': " . $varEntero . "</br>";
        echo "· Variable de tipo 'Boolean': " . $varBoolean . "</br>";
        echo "· Variable de tipo 'Float': " . $varFloat . "</br>";
        echo "· Variable de tipo compuesto: ";
            print_r($varArray) ;
        echo  "</br>" . "· La primera posición del array es: " . $varArray[0] . "</br>"; 

        // Ahora vamos a hacer unas sencillas operaciones aritméticas

        echo "<h1>CÁLCULOS ARITMÉTICOS</h1>";

        $var1 = 2;
        $var2 = 8;
        $resta = $var1-$var2;
        $suma = $var1+$var2;
        $multi = $var1*$var2;
        $div = $var1/$var2;
        
        echo "Los números que vamos a utilizar son: $var1 y $var2" . "</br>";
        echo "Si los restamos, obtenemos: $resta" . "</br>";
        echo "Si los sumamos: $suma" . "<br/>"; // La etiqueta <br> también está aceptada de esta manera
        echo "Si los multiplicamos: $multi" . "</br>"; 
        echo "Si los dividimos: $div" . "<br>"; // También podemos ponerla de esta otra manera
        
    ?>
    
</body>
</html>