<?php 
include_once('conexion.php');
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];

$insert =	"INSERT INTO usuario(codigo,nombre,estado)VALUES('$codigo','$nombre',1)";
$query 	=	mysqli_query($conexion,$insert); 

header("location: ../index.php");
 ?>