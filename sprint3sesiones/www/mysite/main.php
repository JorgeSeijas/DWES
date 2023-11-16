<html>

<head>
	<style>
		h2 {
			color: red;
		}
		a {
			text-decoration: none;
			color: blue;
		}
		a:hover {
			color: red;
		}
		a {
			transition: color 0.8s linear 0.2s;
		}
	</style>
</head>
<body>
	<a href="/logout.php">Desconectarse</a>
	<br>
	<?php
		$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail'); //Nos conectamos a la base "mysitedb" de datos con usuario root y su contraseña desde el localhost
	?>
	<!--Si conecta el programa sigue adelante-->
	<h1>Conexion establecida</h1>
	<h2>Datos de la tabla tJuegos</h2>
	<ul> 
	<?php
		$query = 'SELECT * FROM tJuegos'; //Asignamos una sentencia SELECT a la variable "query"
		$result = mysqli_query($db, $query) or die('Query error'); //Realizamos la consulta y asignamos el resultado a la variable "result"
		while ($row = mysqli_fetch_array($result)){ //Bucle para mostrar el resultado por campos
			echo '<li>';
			echo '<a href = "/detail.php?id='.$row['id'].'">'.$row['id'].': '.$row['nombre'].'</a>'; //Enlace que lleva a detail.php según el ID del juego
			echo '<br>';
			echo '<img src = "'.$row['url_imagen'].'" alt = "Imagen" width = "300px" height = "200px">'; //Mostramos la imagen 
			echo '<br>';
			echo $row['anyo'].', '.$row['genero']; //Mostramos el año y género
			echo '</li>';
			echo '<br>';
		}
	?>
	</ul>
</body>
</html>