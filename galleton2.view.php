<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(!$idioma): ?>
        <p>No hay idioma</p>
    <?php else: ?>
        <p>Idioma  <?= $idioma ?></p> 
    <?php endif ?>
    




    <form action="galleton2.php" method="post">
        Elige tu idioma : 
        <select name="idioma" id="idiomas">
            <option value="Castellano">Castellano</option>
            <option value="Euskera">Euskera</option>
        </select>
        <input type="submit" value="Guardar">


    </form>
</body>
</html>