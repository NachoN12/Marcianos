<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
 $insert = "INSERT INTO revision (fecha, revisor, nave) VALUES ('".$_POST['fecha']."', '".$_POST['fiscalizador']."', '".$_POST['aeronave']."')";
 if(mysqli_query($link, $insert) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Creación exitosa!</strong> La revisión ha sido agregado correctamente.
	</div>
	<?php
}
else{
	?>
	<div class="alert alert-warning">
	  	<strong>Error!</strong> Esta nave ya ha sido revisada hoy!
	</div>
	<?php
    }
?>
</html>

