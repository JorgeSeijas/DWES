<?php
	$db = mysqli_connect('172.16.0.2', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
<body>
	<?php
	session_start();
	$user_id = 'NULL';
	if (!empty($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}
	$juego_id = $_POST['juego_id']; //Almacenamos  los datos del nuevo comentario desde el formulario
	$comentario = $_POST['new_comment'];

	$query = $db -> prepare("INSERT INTO tComentarios (comentario, usuario_id, juego_id, fecha) VALUES (?, ?, ?, ?)"); //Sentencia para insertar el nuevo comentario
	$query -> bind_param("siis", $comentario, $user_id, $juego_id, now());
	$query -> execute();

	echo "<p>Nuevo comentario "; //Mensaje de confirmación
	echo mysqli_insert_id($db);
	echo " añadido<p>";

	$query -> close();
	echo "<a href = '/detail.php?id=".$juego_id."'>Volver</a>"; //Enlace para volver a detail.php
	mysqli_close($db); //Cierre de conexión
	?>
</body>
</html>
