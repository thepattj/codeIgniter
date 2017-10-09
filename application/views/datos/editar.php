<h1>Cambiar la contraseña del usuario</h1><br><br><br>
<form action="<?=base_url()?>datos/cambiardatos" method="POST">
	Introduce tu usuario <br>
	Usuario
	<input type="text" name="usuario" placeholder="Escribe tu usuario"><br>
	Ahora tu contraseña nueva
	<input type="password" name="contra"><br>
	<button type="submite">Cambiar</button> <!--SE MANDA A ("/datos/recibirdatos")-->

	<!--<label type="text" value=""></label>-->
</form>
<form action="<?=base_url()?>datos/cambiarusuario" method="POST">
	O cambia el nombre de tu usuario
	<br>ACTUAL<input type="text" name="usuario" placeholder="Escribe tu usuario"><br>
	<br>NUEVA<input type="text" name="nuevo" placeholder="Escribe el nuevo usuario">
	<button type="submite">Cambiar</button> <!--SE MANDA A ("/datos/recibirdatos")-->
</form>
	<form action="<?=base_url()?>datos/regresar" method="POST"><button type="submite">Regresar</button></form>

</body>
</html>