<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
<body>
	<?php
	$juego_id = $_POST['juego_id'];
	$comentario = $_POST['new_comment'];

	$query = "INSERT INTO tComentarios (comentario, usuario_id, juego_id, fecha) VALUES ('".$comentario."', NULL, ".$juego_id.", now())";

	mysqli_query($db, $query) or die('Error');

	echo "<p>Nuevo comentario ";
	echo mysqli_insert_id($db);
	echo " añadido<p>";

	echo "<a href = '/detail.php?id=".$juego_id."'>Volver</a>";
	mysqli_close($db);
	?>
</body>
</html>
