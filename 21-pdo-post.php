<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];

if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)){
    echo "todos los campos son obligatorios";
}

if($tos== 1 || $fiebre== 1 || $disnea== 1 || $dolor_muscular== 1 || $gripe== 1 || $presion_alta== 1 || $fatiga== 1 || $garraspera== 1){
    $resultado = "1";
}
else{
    $resultado = "0";
}

$severname = "Localhost";
$username = "root";
$password = "";
$dbname = "covid";
try{
    $conn = new PDO("mysql:host=$severname;dbname=$dbname", $username , $password);

    $conn->beginTransaction();
$sql="INSERT INTO `pacientes` (`nombres`, `apellidos`, `edad`, `talla_m`, `peso_kg`, `sintoma_tos`,
`sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`, `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`, `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`) VALUES ('Pedrito', 'Palotes', 14, 1.45, 36.00,
'0', '0', '0', '0', '0', '0', '0', '0', '2024-05-27', '');";

$db->exec($sql);
$db->commit();
 } 
}