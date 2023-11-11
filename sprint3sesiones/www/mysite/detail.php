<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
<body>

<?php
	if (!isset($_GET['id'])) {
		die ('No se ha especificado un juego'); //comprobación de que el id se reconoce
	}
	$juego_id = $_GET['id'];  //Asignamos el ID a la variable "juego_id"
	$query = 'SELECT * FROM tJuegos WHERE id = '.$juego_id; //Asignamos otra sentencia SELECT según el ID.
	$result = mysqli_query($db, $query) or die ('Query error'); //Realizamos la consulta y la guardamos en "result"
	$only_row = mysqli_fetch_array($result); //Como se espera solo 1 fila no se realiza un bucle 
	echo '<h1>'.$only_row['nombre'].'</h1>'; //Muestra de los datos del juego
	echo '<h2>'.$only_row['anyo'].'</h2>'; 
	echo '<br>';
	echo '<img src = "'.$only_row['url_imagen'].'" alt = "imagen">';
?>
<h3>Comentarios:</h3>
<ul>
	<?php
	$query2 = 'SELECT * FROM tComentarios WHERE juego_id = '.$juego_id; //Realizamos una  consulta para mostrar los comentarios del juego en cuestión
	$result2 = mysqli_query($db, $query2) or die('Query error');
	while ($row = mysqli_fetch_array($result2)) {
		echo '<li>'.$row['comentario'].'<br>'.$row['fecha'].'</li>';
	}
	mysqli_close($db); //Cerramos conexión
	?>
</ul>
<br>
<p>Deja un comentario nuevo:</p>
<form action = "/comment.php" method = "post"> <!--Formulario para generar comentarios que redirecciona a comment.php-->
	<textarea rows = "4" cols = "50" name = "new_comment"></textarea><br>
	<input type = "hidden" name = "juego_id" value = "<?php echo $juego_id; ?>">
	<input type = "submit" value = "Comentar">
</form>
</body>
</html>
