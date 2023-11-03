<!-- 
    Implementar un programa PHP que cree una matriz de 6x6, es decir, de 36 posiciones.
    Para rellenar los huecos tienes que utilizar sentencias de tipo bucle, por ejemplo, puedes utilizar un foreach que recorre el
    array central y dentro de cada una de estas posiciones utilizar otro que recorrerá los arrays individuales.
    El contenido de cada posición será un número del 1 al 36, obteniendo una salida similar a la que sigue:
                                        01 02 03 04 05 06
                                        07 08 09 10 11 12
                                        13 14 15 16 17 18
                                        29 20 21 22 23 24
                                        25 26 27 28 29 30
                                        31 32 33 34 35 36
    Diseña un programa completo utilizando PHP que imprima una matriz idéntica a la expuesta más arriba.
        • Crea un foreach que recorrerá el array “principal”
        • Será necesaria la creación de un segundo foreach dentro del anterior, que recorrerá los array contenidos en cada una de las posiciones del array principal
        • Imprimir el contenido de cada posición
        • Recuerda comentar todo el código de forma adecuada
-->

<?php

// Crear la matriz de 6x6
$matriz = array();
$numero = 1;

for ($i = 0; $i < 6; $i++) { 
    $fila = array();
    
    for ($j = 0; $j < 6; $j++) {
        $fila[] = str_pad($numero, 2, "0", STR_PAD_LEFT); // Formatea el número para que tenga 2 dígitos y si tiene 1 se añade un 0 a la izquierda
        $numero++;
    }
    
    $matriz[] = $fila;    
}

// Imprimir la matriz
foreach ($matriz as $fila) {
    foreach ($fila as $numero) {
        echo $numero . " ";
    }
    echo "\n"; // Salto de línea al final de cada fila
}

?>