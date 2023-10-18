<html>

<head>
	<style>
		h2 {
			color: red;
		}
	</style>
</head>
<body>

<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>

	<h1>Conexion establecida</h1>
	<h2>Datos de la tabla tJuegos</h2>
	<ul>
	<?php
	$query = 'SELECT * FROM tJuegos';
	$result = mysqli_query($db, $query) or die('Query error');
	while ($row = mysqli_fetch_array($result)){
		echo '<li>';
		echo '<a href = "/detail.php?id='.$row['id'].'">'.$row['id'].': '.$row['nombre'].'</a>';
		echo '<br>';
		echo '<img src = "'.$row['url_imagen'].'" alt = "Imagen" width = "300px" height = "200px">';
		echo '<br>';
		echo $row['anyo'].', '.$row['genero'];
		echo '</li>';
		echo '<br>';
	}
	?>
	</ul>
</body>
</html>
