<?php
    $name = $_POST['nombre'];
    $last_name = $_POST['apellido'];
    $birthday = $_POST['nacimiento'];
    $hashed_password = password_hash($_POST['contraseña'], PASSWORD_BCRYPT);

    $conexion = mysqli_connect('localhost', 'root', '', 'registros') or exit("Error al registrarse");

mysqli_query($conexion, "INSERT INTO personas_registradas VALUES (DEFAULT, '$name', '$last_name', '$birthday', '$hashed_password')");

mysqli_close($conexion);

header('Location: register.php?done')
?>