<!-- 
    Diseña un nuevo programa que implemente dos funciones en PHP las cuales validan si el login y la
    contraseña utilizadas por un usuario para registrarse en una aplicación cumplen con las siguientes directrices:
        • El login debe tener más de 6 caracteres y menos de 15
        • Puede estar formado por números y letras
        • La contraseña estará formada exactamente por 7 caracteres y solo pueden ser letras
        • Además, el login y la contraseña no pueden ser iguales
    Además, diseña un formulario en HTML que contenga un par de cajas de texto donde se introducen los datos anteriores.
    Diseña el programa en PHP que evalúa si los valores introducidos en el formulario HTML que también se ha de implementar, cumple con las normas de estilo definidas.
        • Crea un formulario en HTML que tenga dos cajas de texto y un botón.
        • Desde el fichero PHP se comprueba la validez del login y la contraseña introducido. 
            Si no se adecúan a los requisitos se vuelve a solicitar al usuario que introduzca otros válidos.
        • Para validar el login y la contraseña implementa todo el contenido del fichero PHP utilizando funciones.
        • El código debe estar comentado
-->

<?php

// Función para validar el login
function validarLogin($login) {

    // Comprobar la longitud del login
    if (strlen($login) < 7 || strlen($login) > 14) {
        return false;
    }

    // Comprobar que el login contiene solo letras y números
    if (!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
        return false;
    }

    return true;
}

// Función para validar la contraseña
function validarContraseña($contraseña) {

    // Comprobar que la contraseña tiene exactamente 7 caracteres
    if (strlen($contraseña) !== 7) {
        return false;
    }

    // Comprobar que la contraseña contiene solo letras
    if (!ctype_alpha($contraseña)) {
        return false;
    }

    return true;
}

// Procesar el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $contraseña = $_POST["contraseña"];

    // Validar login y contraseña
    if (validarLogin($login) && validarContraseña($contraseña) && $login !== $contraseña) {
        // Los datos son válidos, puedes realizar otras acciones aquí
        echo "Datos válidos. Registro exitoso.";
    } else {
        // Los datos no son válidos, mostrar un mensaje de error
        echo "Los datos no son válidos. Por favor, inténtelo nuevamente.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>

    <section class="formulario">


        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

        <div class="logpass">
            <label for="login">Usuario:</label>
            <input type="text" name="login" id="login" placeholder="Entre 6 y 15 letras y/o números" required><br>
        
            <label for="contraseña">Contraseña:</label>
            <input type="text" name="contraseña" id="contraseña" placeholder="7 letras"><br>
        </div>

        <input class="boton" type="submit" value="Registrar">
    </form>
    </section>

</body>
</html>
