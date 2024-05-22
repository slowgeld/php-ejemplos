<?php

include("12-clase.php");

echo "******* BIENVENIDO  A MI CALCULADORA *******\n";
echo "******* MENU DE OPCIONES *******\n";
echo "******* SUMAR (OPCION 1) *******\n";
echo "******* RESTAR (OPCION 2) *******\n";
echo "******* MULTIPLICAR (OPCION 3) *******\n";
echo "******* DIVIDIR (OPCION 4) *******\n";
echo "******* POTENCIA (OPCION 5) *******\n";
echo "******* RAIZ (OPCION 6) *******\n";
echo "******* SALIR (OPCION 0) *******\n";
echo "INGRESE LA OPCION :\n";
$opcion = fgetc(STDIN);
switch ($opcion) {
    case 1;
    echo "ESCRIBA EL PRIMER NUMERO:";
    $numero1 = fgetc(STDIN);
    echo "\nESCRIBA EL SGUNDO NUMERO:";
    $numero2 = fgetc(STDIN);
    $calculadora = new calculadora($numero1, $numero2);
    $resultado = $calculadora->sumar();
    echo "\nLA SUMA ES :".$resultado;
    break;
    
    case 2;
    echo "ESCRIBA EL PRIMER NUMERO:";
    $numero1 = fgetc(STDIN);
    echo "\nESCRIBA EL SGUNDO NUMERO:";
    $numero2 = fgetc(STDIN);
    $calculadora = new calculadora($numero1, $numero2);
    $resultado = $calculadora->restar();
    echo "\nLA RESTA ES :".$resultado;
    break;

    case 3;
    echo "ESCRIBA EL PRIMER NUMERO:";
    $numero1 = fgetc(STDIN);
    echo "\nESCRIBA EL SGUNDO NUMERO:";
    $numero2 = fgetc(STDIN);
    $calculadora = new calculadora($numero1, $numero2);
    $resultado = $calculadora->multiplicar();
    echo "\nLA MULTIPLICACION ES :".$resultado;
    break;

    case 4;
    echo "ESCRIBA EL PRIMER NUMERO:";
    $numero1 = fgetc(STDIN);
    echo "\nESCRIBA EL SGUNDO NUMERO:";
    $numero2 = fgetc(STDIN);
    $calculadora = new calculadora($numero1, $numero2);
    $resultado = $calculadora->dividir();
    echo "\nLA DDIVISION ES :".$resultado;
    break;

    case 5;
    echo "ESCRIBA EL PRIMER NUMERO:";
    $numero1 = fgetc(STDIN);
    echo "\nESCRIBA EL SGUNDO NUMERO:";
    $numero2 = fgetc(STDIN);
    $calculadora = new calculadora($numero1, $numero2);
    $resultado = $calculadora->potencia();
    echo "\nLA POTENCIA ES :".$resultado;
    break;

    case 6;
    echo "ESCRIBA EL PRIMER NUMERO:";
    $numero1 = fgetc(STDIN);
    echo "\nESCRIBA EL SGUNDO NUMERO:";
    $numero2 = fgetc(STDIN);
    $calculadora = new calculadora($numero1, $numero2);
    $resultado = $calculadora->raiz();
    echo "\nLA RAIZ CUADRADA ES :".$resultado;
    break;

    case 0;
        echo "MUCHAS GRACIAS POR ESTAR AQUI ";
        break;
        default;
        #code...
        break;
    
        do{
        echo "¿INGRESE LA OPCION";
        $opcion = fgetS(STDIN);
        switch ($opcion){
        }
        if($opcion == 0) break;
    echo "\n DESEA CONTINUAR ? (1=SI/0=NO)";
    $rpta = fgets(STDIN);
}
   
   while($rpta==1)      

}


?>
