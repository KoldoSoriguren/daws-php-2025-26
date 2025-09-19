<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <?php
    if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operacion"])) {
        echo "<h3>Resultado de la operación</h3>";
        echo "<p>El resultado es: " . operaciones($numero1, $numero2, $operacion) . "</p>";
    } else {
        echo "<h3>Por favor, introduce los datos en el formulario</h3>";
    }
    
    
    
    ?>

</header>





<h2>Calcular</h2>
<form action="formu2.php" method="operaciones">
    Primer numero: <input type="text" name="num1">
    Segundo numero: <input type="text" name="num2">
    <select name="operacion" id="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
    </select>
    <input type="submit" value="Calcular">


</form>
    
</body>
</html>