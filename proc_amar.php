<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $insert = "INSERT INTO pasajero (nombre) VALUES ('".$_POST['nombre_marciano']."')";
 if(mysqli_query($link, $insert) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Creación exitosa!</strong> El marciano ha sido agregado correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong> Hubo un problema al agregar Marciano, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>

