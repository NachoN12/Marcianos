<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="proc_anav.php" method="post">
		<center>
		<label> Nombre de la Aeronave </label> <br>
	    <input name="nombre_aeronave" type="text" placeholder="Introduce nombre de la nave"><br> <br>
	    <label> Capacidad </label> <br>
	    <input name="capacidad" type="number" min="1" placeholder="Introduce capacidad de la aeronave"><br> <br>
	 
		<input type="submit" name="agregar_aeronave" value="Agregar Aeronave">
</body>
</html>