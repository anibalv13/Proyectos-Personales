<Html>
<head>  
	<title>Tabla Periodica Simbolos</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilotabla.css" >
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favico.png"> </link>
	<script>
		function revisar(n){
			if (n.value.length==0)
				{alert("El campo "+ n.name +" debe ser llenado");
					n.focus();
				return false;}
				else
				{return true;}
					}

		function validar(){ 
			var control=false;
				if(revisar(document.registro.Nombre))
				if(revisar(document.registro.Apellido))
				if(revisar(document.registro.numero))
				if(revisar(document.registro.usuario))
				if(revisar(document.registro.password))
				
					control=true;
				if(control)
					alert("Su registro fue llenado con exito");
				else 
					return false; } 
	</script>
</head>
<header>
	<div class="cont1">
		<h1 class="logo"> <img src="imagenes/Icono.png" width="50px"> Registrate</h1>
		<nav>
			<a href="Interfaz.php">Incio</a>
			<a href="TablaPeriodicaSimbolos.php"> Tabla Peri&oacute;dica</a>
			<a href="Registrar.php"> Registrate</a>
		</nav>
	</div>
</header>
<body>
	<main>
		<div align="center" class="cont1">
		
			<form name="registro" class="formulario" action="registrar2.php" method="post" onsubmit>
				<input class="input" name="ci" type="text" placeholder="&#9998; ci" >
				<input class="input" name="nombre" type="text" placeholder="&#9998; Nombres" >
				<br>
				<input class="input" name="apellido" type="text" placeholder="&#9998; Apellidos" >
				<br>
				<input class="input" name="numero" type="number" placeholder="&#9990; Tel&eacute;fono Celular">
				<br>
				<input class="input" name="usuario" type="text" placeholder="&#64; Usuario">
				<br>
				<input class="input" name="clave" type="password" placeholder="&#10033; Contraseña">
				<br><br>
				<!--<input class="btn" type="button" onclick="validar()" value="REGISTRATE">-->
				<input class="btn" type="submit" value="Enviar">
			</form>
			
		</div>
	</main>
</body>
</html>