<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    
</head>
<body style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif ">

    <p>Bienvenido, aquí puedes ver los datos enviados en el formulario</p>
    <p>Para verlos haz click <input type="button" value="aquí" id="boton"></p>
    <div id="contenido"></div>

    <!-- PHP embebido para la recepción de datos -->
    <?php
     $nombre = $_POST["nombre"];
     $correo = $_POST["correo"];
     $mensaje = $_POST["mensaje"];
     $dispositivo = $_POST["radio"];
     

     
    ?>

    <!-- JS para sacar datos de formulario en la web -->
    <script> 
                
            let datos = ["<?=$nombre?>", " <?=$correo?>", " <?=$mensaje?>", " <?=$dispositivo?> "];
            let boton = document.querySelector('#boton');
            boton.addEventListener('click', ()=>{
            let contenedor = document.querySelector('#contenido');
            let p = document.createElement('p');
            p.innerText = datos;
            contenedor.appendChild(p);
        });
           
    </script>
   
</body>
</html>

