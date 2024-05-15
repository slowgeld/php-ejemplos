<?php
//echo "Ingrese su nota : ";
//$nota = fgets(STDIN);
$contador = 1;
$sumanotas = 0;
while($contador<=3) {
    $sumanotas = $sumanotas + $nota;
    echo "Ingrese su nota : ";
    $nota = fgets(STDIN);
    $contador++;//$contador=$contador+1
}
$notapromedio = $sumanotas/3;
echo"\n el promedion de notas es : ".$notapromedio;

//logica que me permite dar el mayor de 5 numeros
$mayor=0;
for( $i= 1; $i< 5; $i++ ) {
    $numero = fgets(STDIN);
    if($mayor<$numero) {
        $mayor = $numero;
    }
}
echo "El numero menor es :".$mayor;

?>
