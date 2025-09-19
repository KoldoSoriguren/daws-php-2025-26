<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (devolverda($nombre, $password, $_Agenda)) {
        echo "<p>Hola $nombre " . buscarApellidos($nombre, $_Agenda) . "</p>";
    } else {
        echo "<h3>Usuario no válido</h3>";
    }
    
    ?>

    <form action="formu4.php" method="post">
        Nombre: <input type="text" name="nombre">
        Password: <input type="password" name="password">
        <input type="submit" value="Enviar">

    </form>
</body>
</html>