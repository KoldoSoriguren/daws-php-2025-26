<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Galletón</title>
</head>
<body>
    <?php if(!$usuario): ?>
        <p>Usuario no encontrado</p>
    <?php else: ?>
        <p>Usuario actual: <strong><?= htmlspecialchars($usuario) ?></strong></p>
    <?php endif ?>

    <form action="galleton.php" method="post">
        <label>
            Introduce el usuario que deseas almacenar:
            <input type="text" name="usuario">
        </label>
        <input type="submit" value="Guardar usuario">
    </form>

    <form action="galleton.php" method="post">
        <input type="hidden" name="borrar" value="1">
        <input type="submit" value="Borrar cookie">
    </form>
</body>
</html>
