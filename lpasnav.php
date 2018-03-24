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


</html>