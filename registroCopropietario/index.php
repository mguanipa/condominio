
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
    <script src="js/jquery-1.3.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.js" type="text/javascript" ></script> 
    <script src="js/ajaxupload.3.5.js"   type="text/javascript"></script>
    <script src="js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/jquery.functions.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/ui/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="js/ui/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/ui/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="js/ui/jquery.ui.button.js"></script>
    <script type="text/javascript" src="js/ui/jquery.ui.position.js"></script>
    <script type="text/javascript" src="js/ui/jquery.ui.autocomplete.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript" src="js/calendar-es.js"></script>
    <script type="text/javascript" src="js/calendar-setup.js"></script>
    <script type="text/javascript" src="js/mask.js"></script>
    <script type="text/javascript" href="js/mask1.js"></script>
    <style type="text/css" title="currentStyle"> 
                    @import "css/demo_page.css";
                    @import "css/demo_table.css";
    </style>
    <link type="text/css" href="ccs/jquery.ui.base.css" rel="stylesheet" />
    <link type="text/css" href="ccs/jquery.ui.theme.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/calendar-green.css" />
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
   		$sql = "SELECT *
				FROM tbl_propietario
				INNER JOIN tbl_apto ON tbl_propietario.apto_id = tbl_apto.id
				ORDER BY tbl_propietario.in_activo DESC , tbl_propietario.apto_id ASC ";
		$result = mysql_query($sql);

	?>

<br />

<center>
<label>Lista de Propietarios</label><br><br>
<div id="contenidop">
<p align="left" style="padding-top: 10px;">
<a href="agregar.php" align="left">
<img align="left" alt="Agregar Propietario" src="../images/propietario.png">
</a>Agregar
</p>
<table>
   		<tr>
   			<th>Cedula</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tlf. Local</th>
            <th>Celular</th>
            <th>Apartamento</th>
            <th>Estatus</th>
            
            <th colspan="2" width="60"> Acciones</th>
        </tr>
		  
			 <?php while ($row = mysql_fetch_row($result)){
				  echo "<tr><td>".$row[0]."</td>";
				  echo "<td>".$row[1]."&nbsp".$row[2]."</td>";
				  echo "<td>".$row[3]."</td>";
				  echo "<td>".$row[6]."</td>";
				  echo "<td>".$row[7]."</td>";
				  echo "<td><center>".$row[11]."</center></td>";
				  if ($row[9]== 1){
				  	echo "<td>ACTIVO</td>";
				  	echo "<td><center><a href='#'>
					<img border='0' src='../images/database_edit.png'></a>
					<a href='#'>
					<img border='0' src='../images/delete.png'></a>
					</center></td></tr>";
				  }else{
				  	echo "<td>INACTIVO</td>";
				  } 
				  
				}?>
		  
</table>
    </div></center>
</body>
</html>
