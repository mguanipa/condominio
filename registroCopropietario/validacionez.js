//validador de RUT chileno mediante su digito verificador
function validaRut(){  
    var rut = document.getElementById("rut").value;
    var expresionRegular2=/\s/;
      if (rut == '' ) {
        alert('Indique la cedula del elector');
        return false;
      }
      else if (expresionRegular2.test(rut)){
        alert('Numero de cédula incorrecto. Intente nuevamente!');
        return false;
      }
      else if (isNaN(rut)){
        alert('Numero de cédula incorrecto. Intente nuevamente!');
        return false;
      }
      else if (rut.length < 6 || rut.length > 8) {
        alert('Numero de cédula incorrecto. Intente nuevamente!');
        return false;
      }
}


function valEmail(){
	var email = document.getElementById("email").value;
	if (!(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/.test(email))) {
		alert("No cumple con el formato, por favor revisar");
		document.getElementById("email").value = "";
	}
}

function valTelefono(){
	var phone = document.getElementById("phone").value;
	var expresionRegular2=/\s/;
      if (expresionRegular2.test(phone)){
        alert('Debe indicar el numero telefonico local correctamente');
      return false;
      }
      else if (isNaN(phone)){
        alert('Debe indicar el numero telefonico local correctamente');
        return false;
      }
      else if (phone != "" && phone.length != 11) {
        alert('Debe indicar el numero telefonico local correctamente');
        return false;
      }
}

function valCelular(){
	var cellphone = document.getElementById("cellphone").value;
	var expresionRegular2=/\s/;
      if (expresionRegular2.test(cellphone)){
        alert('Debe indicar el numero telefonico local correctamente');
      return false;
      }
      else if (isNaN(cellphone)){
        alert('Debe indicar el numero telefonico local correctamente');
        return false;
      }
      else if (cellphone != "" && cellphone.length != 11) {
        alert('Debe indicar el numero telefonico local correctamente');
        return false;
      }
}

function validaCampos (){
	var c1 = document.getElementById("rut").value;
	var c2 = document.getElementById("name").value;
	var c3 = document.getElementById("lastname").value;
	var c4 = document.getElementById("email").value;
	var c5 = document.getElementById("phone").value;
	var c6 = document.getElementById("cellphone").value;
	var c7 = document.getElementById("npropiedad").value;
	var c8 = document.getElementById("user").value;
	var c9 = document.getElementById("pass").value;


	if (c1.length == 0 || c1 == null || c1 == "") {
		alert("debe ingresar la Cédula de Identidad");
		return false;
	}else if(c2.length == 0 || c2 == null || c2 == ""){
		alert("debe ingresar los Nombres");
		return false;
	}else if (c3.length == 0 || c3 == null || c3 == ""){
		alert("debe ingresar los Apellidos");
		return false;
	}else if (c4.length == 0 || c4 == null || c4 == ""){
		alert("debe ingresar un correo");
		return false;
	}else if (c5.length == 0 || c5 == null || c5 == ""){
		alert("debe ingresar un téléfono fijo");
		return false;
	}else if (c6.length == 0 || c6 == null || c6 == ""){
		alert("debe ingresar un celular");
		return false;
	}else if (c7.length == 0 || c7 == null || c7 == ""){
		alert("debe ingresar un numero de propiedad");
		return false;
	}
}