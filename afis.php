<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="proc_afis.php" method="post">
   		<center>
		<label> Nombre del Fiscalizador </label> <br>
	    <input name="nombre_fiscalizador" type="text" placeholder="Introduce nombre del Fiscalizador"><br><br>
		<input type="submit" name="agregar_fiscalizador" value="Agregar Fiscalizador">
</body>
</html>