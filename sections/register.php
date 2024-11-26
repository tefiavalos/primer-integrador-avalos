<!DOCTYPE html>

<head>
    <html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El señor de los anillos</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <section id="register">
        <h2>Registrarse</h2>
        <form action="send-register.php" method="post" class="register-form">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
            <label for="nacimiento">Fecha de nacimiento</label>
            <input type="date" name="nacimiento" id="nacimiento" required>
            <label for="contraseña">Crear contraseña</label>
            <input type="password" name="contraseña" id="contraseña" required>
            <input type="submit" value="Registrarse">
        </form>

    </section>
    <?php
    if (isset($_GET['done'])) {
        echo '<p class="success-message">¡Registro enviado con éxito!</p>';
    }
    ?>
    <?php include '../components/footer.php'; ?>
</body>

</html>