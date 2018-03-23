<!DOCTYPE html>
<?php
  include('cabecera.html')
?> 
<body>  
   <form role="form" action="proc_arev.php" method="post">
		<center>
		<label> ID del fiscalizador </label> <br>
		<input name="id_fiscalizador" type="number" min="1" placeholder="Introduce el ID del Fiscalizador"><br> <br>
		<label> ID de la Nave Revisada </label> <br>
	    <input name="id_aeronave" type="number" min="1" placeholder="Introduce el ID de la aeronave"><br><br>
	    <label> Fecha </label> <br>
	    <input name="fecha" type="date" placeholder="Introduce la fecha"><br><br>
		<input type="submit" name="agregar_revision" value="Agregar Revision">
</body>
</html>