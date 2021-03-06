<?php
	include("conexion.php");
	$conn =  new mysqli($servidor, $user, $password, $bd);
	if ($conn->connect_error){
		die("Error al conectar a la base de datos");
	}

	$sql = "SELECT nota FROM notas ORDER BY nota";
	$result = mysqli_query($conn, $sql);
	$notas = mysqli_fetch_all($result, MYSQLI_ASSOC);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

!DOCTYPE html>
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
				<h1>Mis Listas</h1>
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

				<?php foreach($notas as $nota){ ?>

				<div class="extend-note">
					<h2><?php echo htmlspecialchars($nota['nota']); ?></h2>
				</div>

				<?php } ?>

		</div>
	</div>
</body>
</html>