<?php
//caso 1
$luzEncendida = true;
if ($luzEncendida){
    echo "La luz esta encendida";
}
else{
    echo "La luz esta apagada";
}

//caso 2

$sintomas_covid = [
    "tos"=>true,
    "fiebre"=>false,
    "dolor"=>false,
    "perdida_olfato"=>false];
if ($sintomas_covid["tos"]&&$sintomas_covid['fiebre']){
    echo "\nEstas enfermo tienes covid. Ve al centro de salud.";
}
else{
    echo "\naun no estas con covid.";
}

//caso 3
$saldo = 0;
if ($saldo > 0) {//$saldo <=0
    echo "\ntienes saldo insuficiente.";
}
else{
    echo "\ntiene saldo.";
}

?>