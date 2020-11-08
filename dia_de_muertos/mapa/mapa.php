<html>
	<head>
		<meta charset=utf-8" />
		<title> Mapa de México</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="styles1.css">
	</head>
	<body>
		<div id="AreaMapa">
			<br><h2>Mapa</h2>
			<iframe name="ventana" src="mapa2.php" width="600" height="450"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15008008.673062624!2d-111.65596616204763!3d23.31341419993274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84043a3b88685353%3A0xed64b4be6b099811!2zTcOpeGljbw!5e0!3m2!1ses-419!2smx!4v1604853394015!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></iframe>
			
			<br>
		</div>
		<div id="Formulario">
			<form action="mapa.php" method="POST">
				<h2>Escoge cual quieres ver</h2><br>
				<label>Recomendados</label><br><br>
					<input type="submit" name="botonMichoacan" id="botonMichoacan" value="Patzcuaro, Michoacán"><br><br>
					<input type="submit" name="botonCDMX" id="botonCDMX" value="San andrés Mixquic, Ciudad de México">
					<br><br>
					<input type="submit" name="botonOaxaca" id="botonOaxaca" value="Santa Lucía del Camino, Oaxaca">
				<br><br>
			</form>
		</div>
	</body>
</html>