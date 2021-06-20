//Bienvenida al sistema
alert("Completa el formulario para encriptar");
//validar universidad
function veruni()
	{ if(document.forms[0].universidad.selectedIndex == 0)
	 { alert("Por favor seleccione su universidad");
	 document.forms[0].universidad.focus;}
	 else
	 {return true;}}
// esta funcion va a evaluar la variable "d" que sera el name del formulario de html y se encarga de ver que el campo no este vacio
function ver(d) { 
if(d.value.length==0)
	{ alert("El campo "+d.name+" no puede estar vacio");
			d.focus();
		return false; } 
		else 
	{ return true; } }

//validar nombre, apellido, cedula, universidad y correo
function validacion(){ 
		var control=false;
			if(ver(document.datos.nombre))
			if(ver(document.datos.apellido))
			if(ver(document.datos.cedula))
			if(veruni())
			if(ver(document.datos.email))
			if(correo())
			if(ver(document.datos.mensaje_cifrado))
			control=true;
		
		if(control)
			alert("El formulario fue llenado con exito");
		else 
			return false; } 
// para validar el correo método "Vicky"
function correo() {
	// Asignamos una variable "cont" para Evaluar el campo email 
	cont=document.datos.email.value;
	//con la variable "arroba" buscamos el cararacter espécifico de "@"
	arroba=cont.indexOf("@");
	// Con esta variable medimos la longitud del campo
	longitud=cont.length;
	
	if (arroba<3){
		alert("Por favor ingrese una direccion de correo valida");
		document.datos.email.focus();
		return false;
		}	
	//para validar el punto	
	//p1= punto 1
	p1=cont.lastIndexOf(".");
	//vef= verificar
	vef=longitud-p1;
	if (vef<3){
		alert("Por favor ingrese una direccion de correo valida");
		document.datos.email.focus();
		return false;
	}
	//para validar que tenga punto y arroba
		//p_a= punto y arroba
	p_a=cont.indexOf(".",arroba);
	//longitud2
	longitud2=p_a-arroba;
	if (longitud2<1){
		alert("Por favor ingrese una direccion de correo valida");
		document.datos.email.focus();
		return false;
	} else {
		return true;
		}
	}
	//encriptador
	function mostrar(){
		var frase=document.datos.mensaje_cifrado.value.toLowerCase();
     //frase.toLowerCase();

		var c1=frase.replace(/a/gm,"Z");
		var c2=c1.replace(/b/gm,"Y");
		var c3=c2.replace(/c/gm,"X");
		var c4=c3.replace(/d/gm,"W");
		var c5=c4.replace(/e/gm,"V");
		var c6=c5.replace(/f/gm,"U");
		var c7=c6.replace(/g/gm,"T");
		var c8=c7.replace(/h/gm,"S");
		var c9=c8.replace(/i/gm,"R");
		var c10=c9.replace(/j/gm,"Q");
		var c11=c10.replace(/k/gm,"P");
		var c12=c11.replace(/l/gm,"O");
		var c13=c12.replace(/m/gm,"N");
		var c14=c13.replace(/n/gm,"M");
		var c15=c14.replace(/o/gm,"L");
		var c16=c15.replace(/p/gm,"K");
		var c17=c16.replace(/q/gm,"J");
		var c18=c17.replace(/r/gm,"I");
		var c19=c18.replace(/s/gm,"H");
		var c20=c19.replace(/t/gm,"G");
		var c21=c20.replace(/u/gm,"F");
		var c22=c21.replace(/v/gm,"E");
		var c23=c22.replace(/w/gm,"D");
		var c24=c23.replace(/x/gm,"C");
		var c25=c24.replace(/y/gm,"B");
		var c26=c25.replace(/z/gm,"A");
	
	
	//document.open();
	//document.write
	alert("su mensaje encriptado es: "+ c26);
	//document.close();
	}
	


	
