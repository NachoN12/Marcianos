<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $elimini = $_POST['id'];

 $query = "SELECT nombre, capacidad FROM aeronave WHERE id= '$elimini'";

 $result = $link->query($query);
 if($row = $result->fetch_assoc()){
 	$nombre = $row['nombre'];
 	$capacidad = $row['capacidad'];
	?>
	<center>
	<form method="POST" action="mnav.php">
	<label> Nombre de la Nave </label> <br>
	<input type="hidden" name="id" value="<?php echo $elimini; ?>">
	<input name="modificar_aeronave" type="text" value="<?php echo $nombre; ?>"><br> <br>
	<label>Capacidad</label><br>
	<input name="capacidad" type="number" value="<?php echo $capacidad; ?>"><br> <br>
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