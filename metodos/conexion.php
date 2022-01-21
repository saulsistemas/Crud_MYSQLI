
<?php 
//CONECTAR A LA BASE DE DATOS
$host ="localhost";
$user="root";
$password="";
$bd="crud1";
$conexion = mysqli_connect($host,$user,$password,$bd);

if (mysqli_connect_errno()) {
	echo "fallo ".mysqli_connect_errno();
} else {
	#echo "bien";
}
?>
