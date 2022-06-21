<?php

?>


<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/985774d57b.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu_style.css">
	<link rel="stylesheet" href="css/cartes.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Ad Astro</title>
</head>

<body>

	<?php include 'elem/header.php' ?>

	<div class="mozaique">
		<div class="cartes">

			<a class="cnt_photo" id="Pla" href="album.php?album=Systeme%20Solaire">
				<p>Système Solaire</p>
			</a>
		</div>

		<div class="cartes">
			
			<a class="cnt_photo" id="Const" href="album.php?album=constellations">
				<p>Constellations</p>
			</a>

		</div>

		<div class="cartes">

			<a class="cnt_photo" id="Neb" href="album.php?album=nebuleuses">
				<p>Nébuleuses</p>
			</a>

		</div>

		<div class="cartes">

			<a class="cnt_photo" id="Gala" href="album.php?album=galaxies">
				<p>Galaxies</p>
			</a>

		</div>

		<div class="cartes">
			
			<a class="cnt_photo" id="Aut" href="album.php?album=autres">
				<p>Autres</p>
			</a>

		</div>

	</div>

</body>
</html>