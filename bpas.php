<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
  $id = $_POST['id'];
 $delete = "UPDATE pasajero SET nave = '0' WHERE id = $id ";
 $abordo = "UPDATE aeronave SET abordo = abordo - 1 WHERE id = $idNave";

 if(mysqli_query($link, $delete) == TRUE && mysqli_query($link, $abordo) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Pasajero Bajado Exitosamente!</strong> Ha descubierto al malulo.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Hubo un problema al bajar al pasajero, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>