<head>
	<title> Formulario php </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=devide-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilo.css" >
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/favico.ico"> </link>
	
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
				if(revisar(document.registro.correo))
				if(revisar(document.registro.direccion))
				if(revisar(document.registro.FechaDeNacimiento))
				if(revisar(document.registro.Profesion))
				if(revisar(document.registro.usuario))
				if(revisar(document.registro.password))
				if(correo())
				
					control=true;
				if(control)
					alert("Su registro fue llenado con exito");
				else 
					return false; } 
				
		function correo() {
			cont=document.registro.correo.value;
			arroba=cont.indexOf("@");
			longitud=cont.length;
						
				if (arroba<3){
					alert("Por favor ingrese una direccion de correo valida");
					document.registro.correo();
					return false;
							}	
						p1=cont.lastIndexOf(".");
						vef=longitud-p1;
				if (vef<3){
					alert("Por favor ingrese una direccion de correo valida");
					document.registro.correo();
					return false;
						}
				p_a=cont.indexOf(".",arroba);
				longitud2=p_a-arroba;
				if (longitud2<1){
					alert("Por favor ingrese una direccion de correo valida");
					document.registro.correo();
					return false;
				} else {
					return true;
							}
						}
	</script>
</head>