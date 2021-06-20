<main>
	<div class="cont1">
		<h1> &Uacute;nete a nosotros</h1>
			<form name="registro" method="post" class="formulario">
				<p> Ingrese los datos solicitados</p>
				<input class="input" name="Nombre" type="text" placeholder="&#9998; Nombres" >
				<br>
				<input class="input" name="Apellido" type="text" placeholder="&#9998; Apellidos" >
				<br>
				<input class="input" name="correo" type="text" placeholder="&#9865;  Correo" >
				<br>
				<input class="input" name="direccion" type="text" placeholder="&#10148; Dirección">
				<br>
				<input class="input" name="FechaDeNacimiento" type="number" placeholder="&#10148; Fecha de Nacimiento">
				<br>
				<input class="input" name="Profesion" type="text" placeholder="&#9990; Profesi&oacute;n">
				<br>
				<input class="input" name="usuario" type="text" placeholder="&#64; Usuario">
				<br>
				<input class="input" name="password" type="password" placeholder="&#10033; Contraseña">
				<br><br>
				<input type="submit" onclick="validar()" name="registrate" value="REGISTRATE">
			</form>
			<?php 
			include('Pagina/Registrar.php');
			?>
	</div>
</main>