<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/styleslogin.css">
	<title>Crear Integrante</title>
</head>
<body>
    <form action="crearmiembroP.php" method="get">
	<div class="login-box">	
		<h1>Nuevo Integrante</h1>
        

        <!--form method="post"-->
			<label for="nombreLista">Nombres:</label>
			<input type="text" name="nombres">
            <label for="nombreLista">Apellidos:</label>
			<input type="text" name="apellidos">
			<input type="submit">
		<!--/form-->
	</div>	
    </form>
</body>
</html>