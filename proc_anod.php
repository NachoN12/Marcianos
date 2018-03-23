<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $insert = "INSERT INTO nodriza (nombre) VALUES ('".$_POST['nombre_nodriza']."')";
 if(mysqli_query($link, $insert) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Creación exitosa!</strong> La Nave Nodriza ha sido agregada correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong> Hubo un problema al agregar Nave Nodriza, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>

