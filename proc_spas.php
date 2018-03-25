<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
  $idNave = $_POST['aeronave'];
  $idPasa = $_POST['pasajero'];


 $delete = "UPDATE pasajero SET nave = $idNave WHERE id = $idPasa ";
 $abordo = "UPDATE aeronave SET abordo = abordo + 1 WHERE id = $idNave";

 if(mysqli_query($link, $delete) == TRUE && mysqli_query($link, $abordo) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Se subió a bordo de la nave!</strong> El pasajero comenzará su viaje.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Vaya a cargar su SpeisPase.
	</div>
	<?php
			      	}
?>
</html>