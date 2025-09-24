<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php if(!empty($_SESSION["asistentes"])):?>
        <h3><strong>lista</strong></h3>
        <ul>
            <?php foreach ($_SESSION["asistentes"] as $asistente):?>
                
                <li><?= $asistente?></li>
            <?php endforeach;?>
º
        </ul>

    <?php else: ?>
        <p>No hay asistentes aun</p>
    <?php endif; ?>
  





    <form action="gelleton4.php" method="post">
        <h3><strong>Añadir asistente</strong></h3>
        <input type="text" name="asistente" id="asistente">
        <input type="submit" value="Añadir">


    </form>
    <form action="gelleton4.php" method="post">
        <input type="submit" value="borrar lista completa" name="borrar">

    </form>

    
</body>
</html>