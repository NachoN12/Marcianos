<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
  $elimini = $_POST['aeronave'];
 ?> 
<body>  
   <form role="form" action="proc_rvia.php" method="post">
		<center>
		<label> Origen </label> <br>
		<select name="origen">
			<?php 
				$sql = mysqli_query($link, "SELECT id, nombre FROM nodriza");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
		<label> Destino </label> <br>
		<select name="destino">
			<?php 
				$sql = mysqli_query($link, "SELECT id, nombre FROM nodriza");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
		<input type="hidden" name="nave" value="<?php echo $elimini; ?>">
		<input type="submit" name="revisar_listado" value="Cambiar Rumbo">
</body>
</html>