<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/styleslogin.css">
	<title>Crear Lista</title>
</head>
<body>
    <form action="crearlistaP.php" method="get">
	<div class="login-box">	
		<h1>Lista</h1>
        

        <!--form method="post"-->
			<label for="nombreLista">Nombre de la Lista:</label>
			<input type="text" name="nombreLista">
			<label for="infoLista">Descripcion</label>
			<input type="text" name="infoLista">
			<input type="submit">
		<!--/form-->
	</div>	
    </form>
</body>
</html>