<h1>Registro de usuario</h1><br><br><br>
<form action="<?=base_url()?>datos/recibirdatos" method="POST">
	Nombre
	<input type="text" name="nombre" placeholder="Nombre Apellido"><br>
	Usuario
	<input type="text" name="usuario" placeholder="Escribe tu usuario"><br>
	Contraseña
	<input type="password" name="contra"><br>

	<button type="submite">Registrar</button> <!--SE MANDA A ("/datos/recibirdatos")-->
	
</form>
</body>
</html>