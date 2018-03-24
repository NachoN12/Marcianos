<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $elimini = $_POST['id'];

 $query = "SELECT nombre FROM fiscalizador WHERE id= '$elimini'";

 $result = $link->query($query);
 if($row = $result->fetch_assoc()){
 	$nombre = $row['nombre'];
	?>
	<center>
	<form method="POST" action="mfis.php">
	<input type="hidden" name="id" value="<?php echo $elimini; ?>">
	<label>Nombre del Fiscalizador</label><br>
	<input name="modificar_fiscalizador" type="text" value="<?php echo $nombre; ?>"><br><br>
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