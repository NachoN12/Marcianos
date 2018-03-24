<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
  $nave = $_POST['aeronave'];
 $insert = "INSERT INTO revision (fecha, revisor, nave) VALUES ('".$_POST['fecha']."', '".$_POST['fiscalizador']."', '".$_POST['aeronave']."')";
 if(mysqli_query($link, $insert) == TRUE){
	?>

	<div class="alert alert-success">
		<strong>Creación exitosa!</strong> La revisión ha sido agregado correctamente. Estos son los pasajeros que van en la aeronave.
	</div>
	<body>
		<table class="table table-striped">
  		<tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Bajar Pasajero</th>
  		</tr>
        <tbody>
        	<?php
            $nave = $_POST['aeronave'];
            $results = "SELECT id, nombre FROM pasajero WHERE nave = $nave";
            $result = $link->query($results);
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['nombre']?></td>
                <td> 
                	<form method="POST" action="bpas.php">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    					<input class="btn btn-danger" type="submit" value="Bajar Pasajero">
    				</form>	
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody> 
    </table>
	</body>
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

