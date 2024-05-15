<?php
function obtenerSaludo($parametro) {
    return "hola como estas ".$parametro;
}

function mostrarDatos($nombres,$apellidos,$curso,$semestre)  {
    $mensaje = "hola soy ".$nombres." ".$apellidos." y estoy en el curso ".$curso." del ".$semestre;
    return $mensaje;
}

echo obtenerSaludo("jesus");
echo mostrarDatos("jesus","saldaña","backend developer web","tercer semestre");
?>
