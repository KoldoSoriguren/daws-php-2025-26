<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php if (!$sesion_iniciada): ?>
    <form action="galleton5.php" method="post">
        <h3><strong>Iniciar sesión</strong></h3>
        <input type="text" name="usuario" id="usuario" placeholder="Usuario">
        <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
        <input type="submit" value="Iniciar sesión">
    </form>
<?php elseif($intentos>3): ?>
    <h1 >Numero maximo de intentos realizados</h1>

<?php else: ?>
    <h2><strong>Bienvenido</strong></h2>
    <a href="galleton5.php?accion=cerrar_sesion">Cerrar sesión</a>
<?php endif; ?>

</body>
</html>
