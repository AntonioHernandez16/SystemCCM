<?php

$nombre=$_POST["nombres"];
$apellidoP=$_POST["apellidoP"]; 
$apellidoM=$_POST["apellidoM"]; 
$telefono=$_POST["telefono"]; 
if(isset($_POST["estadoCivil"])){
    $estadoCivil=$_POST["estadoCivil"];
}
$red=$_POST["red"]; 

session_start(); 

$usuario=$_SESSION["usuario"]; 
include("conexionDB.php"); 

if($usuario == ""){
    header("Location: index.php"); 
}
else{
    $consulta = "INSERT INTO Asistente (Nombre, ApellidoPaterno, ApellidoMaterno, Telefono, EstadoCivil, Red) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$telefono', '$estadoCivil', '$red')"; 
    $ejecutar_consulta = $conexion->query($consulta);
	header("Location: RegistrarAsistente.php"); 
}
$conexion->close(); 

?>