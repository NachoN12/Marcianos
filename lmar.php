<!DOCTYPE html>
<style >

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	
</style>
<?php
  include('cabecera.html');
  include('conexion.php');

?> 
<body>  
<table class="table table-striped">
  <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Nave</th>

      <th>Modificar</th>
      <th>Eliminar</th>
  </tr>
        <tbody>
        	<?php
            $results = "SELECT * FROM pasajero";
            $result = $link->query($results);
            while($row = $result->fetch_assoc()) {
            	$id = $row['id'];
            ?>
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['nombre']?></td>
                <td><?php echo $row['nave']?></td> 
                <td> 
					<form method="POST" action="proc_mmar.php">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    					<input class="btn btn-info" type="submit" value="Modificar">
    				</form>
                </td>
                <td> 
                	<form method="POST" action="proc_emar.php">
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    					<input class="btn btn-danger" type="submit" value="Eliminar">
    				</form>	
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody> 
    </table>

</body>


</html>