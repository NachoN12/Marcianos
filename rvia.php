<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="edes.php" method="post">
		<center>
		<label> Nave que desea cambiar el rumbo </label> <br>
		<select name="aeronave">
			<?php 
				$sql = mysqli_query($link, "SELECT id, nombre FROM aeronave");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
		<input type="submit" name="revisar_listado" value="Cambiar Rumbo">
</body>
</html>