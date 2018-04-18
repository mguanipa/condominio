
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Registro Copropietario</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="img/shortcut_icon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
	<script type="text/javascript" src="validacionez.js"></script>
	<header style="height: 100px;"><img src="../images/justina.png"  align="right" style="margin-top: 0px" width="100" height="100"><h3 style="color:white; padding-top: 30px;text-align: right;" width="100" height="100">Junta de Condominio&nbsp&nbsp</h3>
   	<h4 style="color:white; text-align: right">Residencia "Justina" RIF.J30947297-6&nbsp&nbsp</h4>
   	</header>
	<!--div class="login">
		<h3>¿Ya eres usuario?</h3>
		<button onclick = "location='../login/login.php'">Entrar</button>
	</div-->
	<?php
		$con = mysql_connect("localhost","root","123456");
   			if (!$con){die("ERROR DE CONEXION CON MYSQL: ".mysql_error());}
   		$database = mysql_select_db("condominios",$con);
   			if (!$database){die("ERROR CONEXION CON BD: ".mysql_error());}
   		$sql = "SELECT tbl_apto.id, tbl_apto.apto, tbl_apto.alicuota
				FROM tbl_apto
				WHERE tbl_apto.id NOT
				IN (

				SELECT tbl_propietario.apto_id
				FROM tbl_propietario
				WHERE tbl_propietario.in_activo =1
				)";
		$result = mysql_query($sql);
	?>



<br />


    <form method="POST" action="valida.php" onsubmit="return validaCampos()">
		<h2>Registro Nuevo Propietario</h2>

		<label for="rut">Cédula de Identidad:</label>
		<input type="text" id="rut" name="rut" placeholder="Ejemplo: 12345678" onchange="return validaRut()">

		<label for="name">Nombres:</label>
		<input type="text" id="name" name="name" placeholder="Ingrese nombre">

		<label for="lastname">Apellidos:</label>
		<input type="text" id="lastname" name="lastname" placeholder="Ingrese apellido">

		<label for="email">Email:</label>
		<input type="e-mail" id="email" name="email" placeholder="Ejemplo: alguien@algo.com" onchange="return valEmail()">

		<!--label for="user">Nombre Usuario:</label-->
		<input type="hidden" id="user" name="user" placeholder="Ejemplo 'canero01' (sólo utilice letras y numeros)">

		<!--label for="pass">Contraseña:</label-->
		<input type="hidden" id="pass" name="pass" placeholder="Ejemplo 'hola123' (maximo 10 caracteres)">

		<label for="phone">Telefono Fijo:</label>
		<input type="text" id="phone" name="phone" placeholder="Ejemplo: 02120000000" onchange="return valTelefono()">

		<label for="cellphone">Celular:</label>
		<input type="text" id="cellphone" name="cellphone" placeholder="Ejemplo: 0416000000" onchange="return valCelular()">

		<label for="npropiedad">Propiedad:</label>
		
        <select id="npropiedad" name="npropiedad">
				  <option value="">Seleccione</option>
				  <?php while ($row = mysql_fetch_row($result)){
				  echo "<option value=".$row[0].">".$row[1]."&nbsp&nbsp&nbspalicuota: ".$row[2]."</option>";
				} ?>
		</select> 
		<input type="submit" value="Guardar"></input>	
	</form>

</body>
</html>
