<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<h3>Resultado del formulario</h3>";
        echo "<p>" . validar($Asunto, $Email, $Motivo, $Mensaje) . "</p>";
    } else {
        echo "<h3>Por favor, rellena el formulario</h3>";
    }
    
    ?>

    <form action="formu3.php" method="post">
        Asunto: <input type="text" name="asunto">
        Email: <input type="text" name="email">
        Motivo: <select name="motivo" id="motivo">
            <option value="Soporte">Soporte</option>
            <option value="Informacion">Informacion</option>
            <option value="Queja">Queja</option>
            <option value="Otro">Otro</option>
        </select>
        Mensaje: <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        <input type="submit" value="Enviar">

    </form>
    
</body>
</html>