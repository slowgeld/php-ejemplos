<?php
function obtenerSaludo($parametro) {
    return "hola como estas ".$parametro;
}

function mostrarDatos($nombres,$apellidos,$curso,$semestre)  {
    $mensaje = "hola soy ".$nombres." ".$apellidos." y estoy en el curso ".$curso." del ".$semestre;
    return $mensaje;
}

function calcular($operador,$numero1,$numero2)  {
    if($operador=="+")
    return $numero1+$numero2;
    if($operador=="-")
    return $numero1-$numero2;
    if($operador=="*")
    return $numero1*$numero2;
    if($operador=="/")
    return $numero1/$numero2;
}

echo obtenerSaludo("jesus");
echo mostrarDatos("jesus","saldaña","backend developer web","tercer semestre");
echo "El total de la suma es : ".calcular("+",10,34);
?>
