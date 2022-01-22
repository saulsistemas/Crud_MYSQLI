<?php 
include_once('conexion.php');
if ($_POST['accion']==1) {
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];
	
	$insert =	"INSERT INTO usuario(codigo,nombre,estado)VALUES('$codigo','$nombre',1)";
	$query 	=	mysqli_query($conexion,$insert); 

	header("location: ../index.php");

}else if($_POST['accion']==2){
	$id 	= $_POST['id'];
	$codigo = $_POST['codigo'];
	$nombre = $_POST['nombre'];

	$update = "UPDATE usuario SET codigo = '$codigo', nombre='$nombre' WHERE id ='$id' ";
	$query  = mysqli_query($conexion,$update);
	header("location: ../index.php");

}else if ($_GET['accion'] ==3) {
	$id = $_GET["id"];
	
	$delete = "DELETE FROM usuario WHERE id='$id'";
	$query  = mysqli_query($conexion,$delete);
	header("location: ../index.php");

}


 ?>