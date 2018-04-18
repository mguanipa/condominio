<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header style="height: 100px;"><img src="../images/justina.png"  align="right" style="margin-top: 0px" width="100" height="100"><h3 style="color:white; padding-top: 30px;text-align: right;" width="100" height="100">Junta de Condominio&nbsp&nbsp</h3>
   	<h4 style="color:white; text-align: right">Residencia "Justina" RIF.J30947297-6&nbsp&nbsp</h4>
   	</header>
<?php

include("controlador.php");
$rut = $_POST['rut'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$user = '';
$pass = '';
$phone = $_POST['phone'];
$cellphone = $_POST['cellphone'];
$npropiedad = $_POST['npropiedad'];
$in_activo = '1';

$obj = new Controlador();

$final = $obj->Insert($rut, $name, $lastname, $email, $user, $pass, $phone, $cellphone, $npropiedad, $in_activo);

if ($final == true) {
	print '<br><br><br><center><h2>¡Registro guardado con exito!</h2></center>';
	print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../registroCopropietario/index.php">';
}else{
	print '<h2>falla al insertar</h2>';
}

?>

</body>
</html>