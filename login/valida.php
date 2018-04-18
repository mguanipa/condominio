<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name = "viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
	<link rel="stylesheet" href="ztyle.css">
</head>
<body>
	<header style="height: 100px;"><img src="../images/justina.png"  align="right" style="margin-top: 0px"><h3 style="color:white; padding-top: 30px;text-align: right;" width="100" height="100">Junta de Condominio&nbsp&nbsp</h3>
			<h4 style="color:white; text-align: right">Residencia "Justina" RIF.J30947297-6&nbsp&nbsp</h4>
	</header>
	<?php
	include("controlador.php");
	$vuser = $_POST['user'];
	$vpass = $_POST['pass'];


	$objBusqueda = new Controlador();

	$resp = $objBusqueda->Busqueda($vuser, $vpass);

	$rut = $objBusqueda->Rut($vuser, $vpass);


	if($resp == 1){
	    print '<META HTTP-EQUIV=Refresh CONTENT="0; URL=../panel/panel.php">';
	    
	    session_start();
	    $_SESSION['user'] = $vuser;
	    $_SESSION['rut'] = $rut;
	    
	    
	}else{
	    
	    print "<label>Nombre de usuario o contraseña incorrecta, vuelva a intentar</label>";
	    print '<img src="../images/error.png">';
        print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=login.php">';
	}
	?>
	
</body>
</html>