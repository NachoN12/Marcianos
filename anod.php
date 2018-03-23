<!DOCTYPE html>
<?php
  include('cabecera.html');
  include('conexion.php');
?> 
<body>  
   <form role="form" action="proc_anod.php" method="post">
		<center>
		<label> Nombre de la Nave Nodriza </label> <br>
	    <input name="nombre_nodriza" type="text" placeholder="Introduce nombre de la nave"><br> <br>
		<input type="submit" name="agregar_nodriza" value="Agregar Nave Nodriza">
</body>
</html>