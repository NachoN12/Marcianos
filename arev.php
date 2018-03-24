<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="proc_arev.php" method="post">
		<center>
		<label> Fiscalizador </label> <br>
		<select name="fiscalizador">
			<?php 
				$sql = mysqli_query($link, "SELECT * FROM fiscalizador");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
		<label> Nave a revisar </label> <br>
		<select name="aeronave">
			<?php 
				$sql = mysqli_query($link, "SELECT * FROM aeronave");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='".$row['id']."'>" . $row['nombre'] . "</option>";
				}
			?>
		</select><br> <br>
	    <label> Fecha </label> <br>
	    <input name="fecha" type="date" placeholder="Introduce la fecha"><br><br>
		<input type="submit" name="agregar_revision" value="Agregar Revision">
</body>
</html>