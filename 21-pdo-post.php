<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $talla = $_POST['talla'];
    $peso = $_POST['peso'];
    

    $tos = array_key_exists("tos",$_POST) ? $_POST['tos'] : "0";
    $tos = $tos == "" ? "0" : $tos;
    $fiebre = array_key_exists("fiebre",$_POST) ? $_POST['fiebre'] : "0";
    $fiebre = $fiebre == "" ? "0" : $fiebre;
    $disnea= array_key_exists("disnea",$_POST) ? $_POST['disnea'] : "0"; 
    $disnea = $disnea == "" ? "0" : $disnea;
    $dolor_muscular = array_key_exists("dolor_muscular",$_POST) ? $_POST['dolor_muscular'] : "0"; 
    $dolor_muscular = $dolor_muscular == "" ? "0": $dolor_muscular;
    $gripe=array_key_exists("gripe",$_POST) ? $_POST['gripe'] : "0";
    $gripe = $gripe=="" ? "0" : $gripe;
    $Presion_alta = array_key_exists("Presion_alta",$_POST) ? $_POST['Presion_alta'] : "0"; 
    $Presion_alta = $Presion_alta =="" ? "0" : $Presion_alta;
    $Fatiga=array_key_exists("Fatiga",$_POST) ? $_POST['Fatiga']: "0";
    $Fatiga = $Fatiga == "" ? "0" : $Fatiga;
    $Garraspera=array_key_exists("Garraspera",$_POST) ? $_POST['Garraspera'] : "0";
    $Garraspera = $Garraspera == "" ? "0" : $Garraspera;
    $fecha = $_POST['fecha'];

if (empty($nombre) || empty($apellido) || empty($edad) || empty($talla) || empty($peso)){
    echo "todos los campos son obligatorios";
}

if($peso < 30 || $peso > 60){
    echo "Error: El peso debe estar entre 30 y 60 kg.";
} else {
    

if($tos== 1 || $fiebre== 1 || $disnea== 1 || $dolor_muscular== 1 || $gripe== 1 || $Presion_alta== 1 || $Fatiga== 1 || $Garraspera== 1){
    $resultado = "1";
}
else{
    $resultado = "0";
}

$severname = "Localhost";
$username = "root";
$password = "";
$dbname = "covid";
$dbname = "nombre_de_la_base_de_datos";

try{
    $conn = new PDO("mysql:host=$severname;dbname=$dbname", $username , $password);

    $conn->beginTransaction();
$sql="INSERT INTO `pacientes` (`nombres`, `apellidos`, `edad`, `talla_m`, `peso_kg`, `sintoma_tos`,
`sintoma_fiebre`, `sintoma_disnea`, `sintoma_dolormuscular`, `sintoma_gripe`, `sintoma_presionalta`, `sintoma_fatiga`, `sintoma_garraspera`, `ultima_fecha_vacunacion`, `resultado`) VALUES ('Pedrito', 'Palotes', 14, 1.45, 36.00,
'0', '0', '0', '0', '0', '0', '0', '0', '2024-05-27', '');";

$conn->exec($sql);
$conn->commit();
echo "Fue registrado correctamente.";
$pacientes = $db->query("SELECT id, nombres, apellidos, edad FROM pacientes");

foreach ($pacientes as $row) {
    echo "ID: ". $row["id"]. ", NOMBRES: ". $row["nombres"]. ", APELLIDOS: ". $row["apellidos"]."\n";
}
 }
 catch(Exception $e){
    echo "error : ".$e->getMessage();
}


}

}

?>
