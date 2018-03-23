<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="proc_amar.php" method="post">
   		<center>
		<label> Nombre del Marciano </label> <br>
	    <input name="nombre_marciano" type="text" placeholder="Introduce nombre del marciano"><br> <br>
		<input type="submit" name="agregar_marciano" value="Agregar Marciano">
</body>
</html>