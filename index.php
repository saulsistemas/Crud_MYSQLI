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
$select   	="SELECT * FROM usuario";
$query 	= mysqli_query($conexion, $select);
#$user 	= mysqli_fetch_array($query);
#$user 	= mysqli_fetch_object($query);
echo "<table border=1>";
echo "<tr>";
echo "<td>id";
echo "<td>codgo";
echo "<td>nombre";
echo "</tr>";
while ($user= mysqli_fetch_assoc($query)) {
	echo "<tr>";
	#echo $user->nombre;
	echo "<td>".$user['id'];
	echo "<td>".$user['codigo'];
	echo "<td>".$user['nombre'];
	echo "</tr>";
}
echo "</table>"


?>