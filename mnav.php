<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
  $id = $_POST['id'];
  $elimini = $_POST['modificar_aeronave'];
  $cap= $_POST['capacidad'];


 $delete = "UPDATE aeronave SET nombre = '$elimini', capacidad = $cap WHERE id = $id ";

 if(mysqli_query($link, $delete) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Modificacion exitosa!</strong> El nombre de la aeronave fue modificado correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong>	Hubo un problema al modificar el nombre de la aeronave, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>