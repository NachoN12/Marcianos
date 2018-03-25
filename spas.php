<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="proc_spas.php" method="post">
		<center>
		<label> Naves Disponibles </label> <br>
		<select name="aeronave">
			<?php 
				$sql = mysqli_query($link, "SELECT id, nombre FROM aeronave WHERE aeronave.capacidad > aeronave.abordo");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
		<label> Pasajeros sin nave </label> <br>
		<select name="pasajero">
			<?php 
				$sql = mysqli_query($link, "SELECT id, nombre FROM pasajero WHERE nave = 0");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
		<input type="submit" name="revisar_listado" value="Subir Pasajero">
</body>
</html>