<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $elimini = $_POST['id'];

 $delete = "DELETE FROM nodriza WHERE id = '$elimini' ";

 if(mysqli_query($link, $delete) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Eliminacion exitosa!</strong> La nave nodriza ha sido eliminada correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Hubo un problema al eliminar la nave nodriza, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>