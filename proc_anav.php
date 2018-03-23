<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $insert = "INSERT INTO aeronave (nombre, capacidad) VALUES ('".$_POST['nombre_aeronave']."', '".$_POST['capacidad']."')";
 if(mysqli_query($link, $insert) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Creación exitosa!</strong> La Aeronave ha sido agregada correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong> Hubo un problema al agregar Aeronave, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>

