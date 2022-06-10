<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ShareCheck</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div class="main-page">
		<div class="side-bar">
			<div class="menu-top-icon">
				<a href="index.php">
					<img class="fit-icon" src="img/check_icon.png">
				</a>
			</div>
			<div class="side-menu">
				<div class="side-menu-icon">
					<a href="lists.php">
						<img class="fit-icon" src="img/lists_icon.png">
					</a>
				</div>
				<div class="side-menu-icon">
					<a href="teams.php">
						<img class="fit-icon" src="img/team_icon.png">
					</a>
				</div>
				<div class="side-menu-icon">
					<a href="notifications.php">
						<img class="fit-icon" src="img/bell_icon.png">
					</a>
				</div>
				<div class="side-menu-icon">
					<a href="settings.php">
						<img class="fit-icon" src="img/settings_icon.png">
					</a>
				</div>
			</div>
		</div>
		<div class="head-bar">
			<div class="head-bar-title">
				<h1>ShareCheck</h1>
			</div>
			<div class="head-bar-serch">
				<input type="search" placeholder="search" name="search">
				<img class="head-icon" src="img/loupe_icon.png">
			</div>
			<div class="head-bar-profile">
				<img class="head-icon" src="img/user_icon.png">
			</div>
		</div>
		<div class="page-content">
			<div class="content-row">
				<div class="even-box recent-box">
					<h2>Recientes</h2>
					<div class="placeholder-box"></div>
				</div>
				<div class="even-box create-box">
					<h2>Crear</h2>
					<div class="placeholder-box">
						<h2><a href="crearlista.php">Lista</a></h2>
						<h2><a href="crearequipo.php">Equipo</a></h2>
						<h2><a href="crearintegrante.php">Integrante</a></h2>
					</div>
				</div>
				<div class="even-box join-box">
					<h2>Unirse</h2>
					<div class="placeholder-box"></div>
				</div>
			</div>
			<div class="content-row">
				<div class="triple-box templates-box">
					<h2>Plantillas</h2>
					<div class="placeholder-box"></div>
				</div>
				<div class="even-box help-box">
					<h2>Acerca</h2>
					<div class="placeholder-box"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>