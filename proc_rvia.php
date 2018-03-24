<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
  $idOri = $_POST['origen'];
  $idDes = $_POST['destino'];
  $idNave = $_POST['nave'];
 $delete = "UPDATE aeronave SET origen = $idOri, destino = $idDes WHERE id = $idNave ";

 if(mysqli_query($link, $delete) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Comienza el nuevo viaje!</strong>
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Falla técnica(?)
	</div>
	<?php
			      	}
?>
</html>