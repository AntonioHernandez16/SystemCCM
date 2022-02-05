<?php

$red = $_POST["red"]; 
$fecha = $_POST["fecha"];  
$NumAsistentes = $_POST["NumeroAsistentes"]; 

session_start(); 

$usuario=$_SESSION["usuario"]; 
if($usuario == ""){
    header("Location: index.php"); 
}

$redPermitida = $_SESSION["red"]; 
echo "<script>console.log('Debug Objects: " . $redPermitida . "' );</script>";
include("conexionDB.php"); 


if($redPermitida != $red and $redPermitida != 0){
	echo '<script>alert (" La cuenta sólo tiene permisos para registrar asistencias de la red:  '. $redPermitida .' .");</script>';
	echo "<script>console.log('No se pudo " . $redPermitida . "' );</script>";
	$conexion -> close(); 
	echo "<script>window.location.href='Asistencia.php'; </script>";
}
else{
    $consulta = "INSERT INTO Asistencias (Red, Fecha, NumeroAsistentes) VALUES ('$red', '$fecha',  '$NumAsistentes')"; 
    $ejecutar_consulta = $conexion->query($consulta); 
	echo '<script>alert (" Asistencia Registrada con Éxito.");</script>';
	$conexion -> close(); 
	echo "<script>window.location.href='Asistencia.php'; </script>";
}


//header("Location: Asistencia.php"); 



?> 