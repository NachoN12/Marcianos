<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="lpasnav.php" method="post">
		<center>
		<label> Nave a revisar el listado de pasajeros </label> <br>
		<select name="aeronave">
			<?php 
				$sql = mysqli_query($link, "SELECT id, nombre FROM aeronave");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
		<input type="submit" name="revisar_listado" value="Revisar Listado">
</body>
</html>