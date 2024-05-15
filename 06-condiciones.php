<?php
echo "Ingrese su edad";
$edadEstudiante1= fgets(STDIN);
$edadEstudiante2= 21;

if($edadEstudiante1 > $edadEstudiante2){
    echo "El estudiante n° 01 es mayor que el estudiante n° 02";
}
elseif($edadEstudiante1 == $edadEstudiante2){
    echo "El estudiante n° 01 tiene la misma edad qu el estudiante n° 02";
}
else{
    echo "El estudiante n° 02 es mayor que el estudiante n° 01";
}
echo "\n";
echo "Ingrese su nota final";
$notaFinal = fgets(STDIN);
if($notaFinal <=10.5){
    echo "Usted esta aprobado a las justas";
}
elseif(10.5 < $notaFinal && $notaFinal <= 15) {
    echo "Usted esta aprobado de forma regular";
} 
else{
    echo "Usted muy bien aprobado";
}
?>