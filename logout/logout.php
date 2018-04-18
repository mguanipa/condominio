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
	session_start();

	if(isset($_SESSION['user'])){
	    
	    session_destroy();
	    print '<label>Finalizando sesion...</label>';
	    print '<img src="../images/load.gif">';
	    print '<META HTTP-EQUIV=Refresh CONTENT="2; URL=../login/login.php">';
	    
	}else{
	    
	    print "<label>Error, debe validarse como usuario</label>";
	    print '<img src="../images/error.png">';
        print '<META HTTP-EQUIV=Refresh CONTENT="1; URL=../login/login.php">';
	}

	?>

</body>
</html>