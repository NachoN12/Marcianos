<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $insert = "INSERT INTO fiscalizador (nombre) VALUES ('".$_POST['nombre_fiscalizador']."')";
 if(mysqli_query($link, $insert) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Creación exitosa!</strong> El Fiscalizador ha sido agregado correctamente.
	</div>
	<?php
}else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong> Hubo un problema al agregar fiscalizador, vuelva intentarlo.
	</div>
	<?php
			      	}
?>
</html>

