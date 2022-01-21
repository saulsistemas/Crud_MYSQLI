<?php 
include_once('conexion.php');
if ($_POST) {
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	
	$insert =	"INSERT INTO usuario(codigo,nombre,estado)VALUES('$codigo','$nombre',1)";
	$query 	=	mysqli_query($conexion,$insert); 

header("location: ../index.php");

}

if ($_GET && $_GET['accion'] ==3) {
	$id = $_GET["id"];
	$delete = "DELETE FROM usuario WHERE id='$id'";
	$query  = mysqli_query($conexion,$delete);
	header("location: ../index.php");

}


 ?>