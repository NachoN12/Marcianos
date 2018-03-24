<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
  $id = $_POST['id'];
  $elimini = $_POST['modificar_marciano'];


 $delete = "UPDATE pasajero SET nombre = '$elimini' WHERE id = $id ";

 if(mysqli_query($link, $delete) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Modificacion exitosa!</strong> El nombre del marciano fue modificado correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Hubo un problema al modificar el nombre del marciano, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>