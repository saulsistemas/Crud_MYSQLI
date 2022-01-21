
<?php
include_once('metodos/conexion.php');
$select   	="SELECT * FROM usuario ORDER BY id desc";
$query 	= mysqli_query($conexion, $select);
?>
<center>
	<a href="create.php">Crear</a><br>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>CODIGO</td>
			<td>NOMBRE</td>
			<td>ESTADO</td>
			<td>OPCIONES</td>
		</tr>

	<?php 
	while ($user= mysqli_fetch_assoc($query)) {
	?>	<tr>
			<td><?=$user['id'];?>
			<td><?=$user['codigo'];?>
			<td><?=$user['nombre'];?>
			<td><?=$user['estado'];?>
			<td>
				<a href="controlador.php?id=<?=$user['id'];?>&accion=a">Actualizar</a> 
				<a href="controlador.php?id=<?=$user['id'];?>&accion=a">Eliminar</a> 
			</td>
		</tr>
	<?php
	}
	?>
	</table>
</center>

<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a>   </td>