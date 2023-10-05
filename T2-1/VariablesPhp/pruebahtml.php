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

        echo "Variable de tipo 'Cadena de texto': " . $varTexto . "</br>";
        echo "Variable de tipo 'Entero': " . $varEntero . "</br>";
        echo "Variable de tipo 'Boolean': " . $varBoolean . "</br>";
        echo "Variable de tipo 'Float': " . $varFloat . "</br>";
        echo "Variable de tipo compuesto: ";
            print_r($varArray) ;
        echo  "</br>" . "La primera posición del array es: " . $varArray[0] . "</br>"; 

    ?>
    
</body>
</html>