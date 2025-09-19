<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <form action="formu5.php" method="post">
        <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Cantidad</th>
        </tr>
        <?php foreach ($catalogo as $key => $value): ?>
            <tr>
                <td><?= $value["nombre"] ?></td>
                <td><?= $value["descripcion"]?></td>
                <td><?= $value["precio"]?></td>
                <td><input type='number' name='cantidad_". $producto["nombre"] ."' min='0' value='0'></td>


            </tr>



        <?php endforeach; ?>
    </table>
        <input type="submit" value="enviar">

    </form>

</body>
</html>