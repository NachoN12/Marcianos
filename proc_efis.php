<!DOCTYPE html>
<?php
 include('cabecera.html');
 include('conexion.php');
 $elimini = $_POST['id'];

 $delete = "DELETE FROM fiscalizador WHERE id = '$elimini' ";

 if(mysqli_query($link, $delete) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Eliminacion exitosa!</strong> El fiscalizador ha sido eliminada correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Hubo un problema al eliminar el fiscalizador, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>