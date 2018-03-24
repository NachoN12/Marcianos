<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $elimini = $_POST['id'];

 $query = "SELECT nombre FROM pasajero WHERE id= '$elimini'";

 $result = $link->query($query);
 if($row = $result->fetch_assoc()){
 	$nombre = $row['nombre'];
	?>
	<center>
	<form method="POST" action="mmar.php">
	<label> Nombre del Marciano </label> <br>
	<input type="hidden" name="id" value="<?php echo $elimini; ?>">
	<input  name="modificar_marciano" type="text" value="<?php echo $nombre; ?>"><br> <br>
	<button type="submit" class="btn btn-default">Actualizar</button>
	</form>

	<?php
}
else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Hubo un problema al consultar la base con el id indicado.
	</div>
	<?php
			      	}
?>
</html>