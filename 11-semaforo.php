<?php
// Función para mostrar el mensaje en función del color elegido por el usuario.
function displayMessage($color) {
    switch ($color) {
        case 'red':
        case 'rojo':
        case 'r':
            echo "¡Pare!\n";
            break;
        case 'yellow':
        case 'amarillo':
        case 'a':
            echo "¡Espera!\n";
            break;
        case 'green':
        case 'verde':
        case 'v':
            echo "¡Avanza!\n";
            break;
        default:
            echo "Color inválido. Por favor, ingrese 'red', 'amarillo' o 'verde' (o 'r', 'y' o 'g').\n";
    }
}

// Pide al usuario que introduzca un color.
echo "Ingrese el color del semáforo (rojo, amarillo, verde o r, a, v): ";
$color = trim(fgets(STDIN));

// Mostrar el mensaje según el color elegido por el usuario
displayMessage($color);

?>