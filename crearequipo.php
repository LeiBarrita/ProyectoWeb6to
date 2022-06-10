<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/styleslogin.css">
	<title>Crear Equipo</title>
</head>
<body>
    <form action="crearequipoP.php" method="get">
	<div class="login-box">	
		<h1>Nuevo Equipo</h1>
        

        <!--form method="post"-->
			<label for="nombreLista">Nombre del Equipo:</label>
			<input type="text" name="nombreEquipo">
			<label for="infoLista">Descripcion</label>
			<input type="text" name="infoEquipo">
			<input type="submit">
		<!--/form-->
	</div>	
    </form>
</body>
</html>