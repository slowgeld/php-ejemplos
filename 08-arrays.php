<?php

//caso 1
$numeros = array(1,3,5,2,6);
$frutas = ["fresa","naranja","manzana","mandarina"];
print_r($numeros);
print_r($frutas);

//caso 2
$estudiante = array("DNI"=>"41558090",
"edad"=> 18,
"fechanacimiento"=>"2006-03-10",
"nombre"=>"jesus",
"apellidos"=>"saldaña sanchez",
"semestre"=>3,
"deuda"=>100.50,
"notafinal"=>11.5);
print_r($estudiante);
foreach($estudiante as $key => $value) {
echo $key." - ".$value."\n";
}

//caso 3
$estudiante1 = array("DNI"=>"41558090",
"edad"=> 18,
"fechanacimiento"=>"2006-03-10",
"nombre"=>"jesus",
"apellidos"=>"saldaña sanchez",
"semestre"=>3,
"deuda"=>100.50,
"notafinal"=>11.5);
$estudiante2 = array("DNI"=>"41558090",
"edad"=> 18,
"fechanacimiento"=>"2006-03-10",
"nombre"=>"jesus",
"apellidos"=>"saldaña sanchez",
"semestre"=>3,
"deuda"=>100.50,
"notafinal"=>11.5);
$estudiante3 = array("DNI"=>"41558090",
"edad"=> 18,
"fechanacimiento"=>"2006-03-10",
"nombre"=>"jesus",
"apellidos"=>"saldaña sanchez",
"semestre"=>3,
"deuda"=>100.50,
"notafinal"=>11.5);

$estudiantes = array($estudiante1,$estudiante2,$estudiante3);
foreach($estudiantes as $key1 => $estudiante) {
echo "Estudinate n° ".($key1+1)."\n";
foreach($estudiante as $key => $value) {
    echo $key." - ".$value."\n";
}
}
echo "-------------------------\n";
for($i = 0; $i <= count($estudiantes)-1; $i++) {
    echo "Estudiante n° ".( $i )."\n";
    echo "DNI - ".$estudiante[$i].["DNI"]."\n";
    echo "edad - ".$estudiante[$i].["edad"]."\n";
    echo "fechanacimiento - ".$estudiante[$i]["fechanacimiento"]."\n";
    echo "nombre - ".$estudiante[$i]["nombre"]."\n";
    echo "apellidos - ".$estudiante[$i]["apellido"]."\n";
    echo "semestre - ".$estudiante[$i]["semestre"]."\n";
    echo "deuda - ".$estudiante[$i]["deuda"]."\n";
    echo "notafinal - ".$estudiante[$i]["notafinal"]."\n";
}
?>