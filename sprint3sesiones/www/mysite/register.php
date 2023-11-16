<html>

<body>
    <?php
    	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail'); //Nos conectamos a la base "mysitedb" de datos con usuario root y su contraseña desde el localhost
        $nombre = $_POST['f_name'];
        $apellidos = $_POST['f_surname'];
        $email = $_POST['f_email'];
        $contraseña = $_POST['f_password'];
        $contraseña2 = $_POST['f_password2'];

        if (empty($nombre)) || (empty($apellidos)) || (empty($email)) || (empty($contraseña)) || (empty($contraseña2)) {
            die ('ERROR: campos vacíos');
        }
        
        if ($contraseña != $contraseña2) {
            die ("ERROR: Contraseñas no coincidentes");
        } 
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);

        $listaEmail = 'SELECT email from tUsuarios';
        $result = mysqli_query($db, $listaEmail) or die ('Query error');
        while ($row == mysqli_fetch_array($result)){
            if ($email == $row[0]){
                die ('ERROR: email existente');
            }
        }

        //Evitamos la inyección de SQL
        $comprobar = $db -> prepare("INSERT INTO tUsuarios(nombre, apellidos, email, 
        contraseña) VALUES (?, ?, ?, ?)");
        $comprobar -> bind_param("ssss", $nombre, $apellidos, $email, $hash);
        $comprobar -> execute();
        echo '<h1>Usuario Registrado</h1>';
        echo '<a href = "/register.html">Volver</a>'
        $comprobar -> close();

        mysqli_close($db);
        
    ?>
</body>

</html>