<?php
	$nombre = $_POST['nombre'];
	$userName = $_POST['userName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	require ("conexion.php");
	$conector = conexion();
	mysqli_query($conector, "INSERT INTO contacto(nombre, userName, email, password ) VALUES('$nombre','$telefuserName','$email','$password')");
	mysqli_close($conector);
	echo' <script>
			alert("Registro Exitoso");
			location.href="crear cuenta.html";
		</script>
	'
?>