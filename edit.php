<form method="POST" action="metodos/controlador.php">
	<?php  
	include_once('metodos/conexion.php');
	$id = $_GET["id"];
	$select   	="SELECT * FROM usuario WHERE id ='$id'";
	$query 		= mysqli_query($conexion, $select);
	while ($row=mysqli_fetch_array($query)) {
	?>
		<input type="hidden" name="accion" value="2">
		<input type="text" name="id" value="<?=$id;?>">
		<label>Codigo</label>
		<input type="text" name="codigo"  value="<?=$row['codigo']?>"><br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?=$row['nombre']?>"><br>
	<?php 
	}?>	
<input type="submit" value="enviar">
</form>