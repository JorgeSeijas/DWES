<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
<body>
	<?php
	$juego_id = $_POST['juego_id']; //Almacenamos  los datos del nuevo comentario desde el formulario
	$comentario = $_POST['new_comment'];

	$query = "INSERT INTO tComentarios (comentario, usuario_id, juego_id, fecha) VALUES ('".$comentario."', NULL, ".$juego_id.", now())"; //Sentencia para insertar el nuevo comentario

	mysqli_query($db, $query) or die('Error');

	echo "<p>Nuevo comentario "; //Mensaje de confirmación
	echo mysqli_insert_id($db);
	echo " añadido<p>";

	echo "<a href = '/detail.php?id=".$juego_id."'>Volver</a>"; //Enlace para volver a detail.php
	mysqli_close($db); //Cierre de conexión
	?>
</body>
</html>
