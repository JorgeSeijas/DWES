<html>
    <body>
    <?php
        $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
        $email_posted = $_POST['f_email'];
        $password_posted = $_POST['f_password'];
        $hash = password_hash($password_posted, PASSWORD_DEFAULT);
        $query = $db->prepare ("SELECT * FROM tUsuarios WHERE email = ?");
        $query -> bind_param ("s", $email_posted);
        $query -> execute();
        
        if (mysqli_num_rows($query) > 0) {
            $only_row = mysqli_fetch_array($query);
            if (password_verify($only_row['constraseña'], $hash)) {
                session_start();
                $_SESSION['user_id'] = $only_row[0];
                header('Location: main.php');
            } else {
                echo '<p>Contraseña incorrecta</p>';
            }
        } else {
            echo '<p>Usuario no encontrado con ese email</p>';
        }
        $query -> close();
?>  
    </body>
</html>