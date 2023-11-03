<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar datos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <section class="php">

    <!-- Insertamos el código PHP embebido para la recepción de la información del formulario -->
    <?php 
        $user1 = $_GET['login'];
        $pass1 = $_GET['password'];

        // Comprobación del usuario y contraseña
        if ($user1 == "User 1" && $pass1 == 1234) {
            echo "Genial, puedes pasar!!"; // Mensaje que saldrá por pantalla en caso de cumplirse la condición

        } else if ($user1 == "User 1") {
            echo "Lo siento, el usuario es correcto, pero la contraseña no"; // Mensaje que saldrá por pantalla en caso de cumplirse la condición

        } else if ($pass1 == 1234) {
            echo "Lo siento, este usuario no es válido"; // Mensaje que saldrá por pantalla en caso de cumplirse la condición

        } else {
            echo "No has acertado ninguna"; // Mensaje que saldrá por pantalla en caso de cumplirse la condición
        }
    ?>
    </section>

    <section class="volver">  <!-- Botón para volver a index.html -->
        <a href="index.html">
            <button class="atras" type="button">Volver atrás</button>
        </a>
    </section>
</body>
</html>
