<!DOCTYPE html>
<?php
 include('cabecera.html');
 include('conexion.php');
 $elimini = $_POST['id'];

 $delete = "DELETE FROM aeronave WHERE id = '$elimini' ";
 $update = "UPDATE pasajero SET nave = '0' WHERE nave = '$elimini' ";

 if(mysqli_query($link, $delete) == TRUE && mysqli_query($link, $update) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Eliminacion exitosa!</strong> La aeronave ha sido eliminada correctamente.
	</div> 
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Hubo un problema al eliminar la aeronave, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>