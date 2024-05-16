<?php
function sumar($numero1, $numero2) {
    return $numero1 + $numero2;
}

function restar($numero1, $numero2) {
    return $numero1 - $numero2;
}

function multiplicar($numero1, $numero2) {
    return $numero1 * $numero2;
}

function dividir($numero1, $numero2) {
    if($numero2 === 0) {
        return "Error: División por cero";
    } else {
        return $numero1 / $numero2;
    }
}
?>
