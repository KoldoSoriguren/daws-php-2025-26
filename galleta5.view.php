<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta</title>
</head>
<body>

    <?php if (!empty($_SESSION["cesta"])): ?>
        <h2>Productos en tu cesta:</h2>
        <ul>
            <?php foreach ($_SESSION["cesta"] as $producto): ?>
                <li><?= $producto["nombre"] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>La cesta está vacía.</p>
    <?php endif; ?>

    <p><strong>El precio total es:</strong> <?= $precio_compra ?> €</p>

    <h2>Catálogo</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acción</th>
        </tr>
        <?php foreach ($catalogo as $key => $value): ?>
            <tr>
                <td><?= $value["nombre"] ?></td>
                <td><?= $value["descripcion"] ?></td>
                <td><?= $value["precio"] ?> €</td>
                <td><a href="galleta5.php?key=<?= $key ?>">Comprar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
