<html>
<body>
	<h1>Jubilacion</h1>

	<?php
		function edad_en_10_años($edad) {
			return $edad + 10;
		}

		$numero = $_GET["edad"];
		if (edad_en_10_años($numero) > 65) {
			echo "En 10 años tendrás edad de jubilación";
		} else {
			echo "¡Disfruta de tu tiempo!";
		}
	?>
</body>
</html>
