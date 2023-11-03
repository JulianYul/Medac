<!--
    Implementar un programa PHP que define 2 variables, una de tipo entero y otra de tipo String. 
    En temas posteriores automatizaremos la toma de valores con formularios, 
    pero ahora lo haremos de forma manual definiendo al inicio del código el valor de estas variables.
    A continuación, se debe comprobar que si la cadena de texto es “User 1” y el número es “1234”, contemplándose las siguientes salidas:
        • Si solo es igual la cadena de texto: “Lo siento, el usuario es correcto, pero la contraseña no”
        • Si solo es igual el número: “Lo siento, este usuario no es válido”
        • Si ninguna de las dos es correcta: “No has acertado ninguna”
        • Solo si las dos son iguales: “Genial, puedes pasar!!”
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1 Tema 3</title>
 </head>
 <body>
    
    <?php
        
        $user1 = "User 1";
        $pass1 = 1234;

        if ($user1 == "User 1" && $pass1 == 1234) {
            echo "Genial, puedes pasar!!";

        } else if ($user1 == "User 1") {
            echo "Lo siento, el usuario es correcto, pero la contraseña no";

        } else if ($pass1 == 1234) {
            echo "Lo siento, este usuario no es válido";

        } else {
            echo "No has acertado ninguna";
        }


    ?>

 </body>
 </html>