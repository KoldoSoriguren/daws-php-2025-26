<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['grados']) && isset($_GET['formato'])){
        echo "<h3>Resultado de la conversión</h3>";
        if($formato == "C"){
            echo "<p>$cantidad ºC son " . conversion($cantidad, $formato) . " ºF</p>";
        }
        else if($formato == "F"){
            echo "<p>$cantidad ºF son " . conversion($cantidad, $formato) . " ºC</p>";
        }
    }else{
        echo "<h3>Por favor, introduce los datos en el formulario</h3>";
    }

    
    ?>
    <form action="formu1.php">
    Introduce la temperatura: <input type="text" name="grados">
    Indica la unidad introducida: 
    <select name="formato" id="formato">
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
          
    </select>


    </form>
    


</body>
</html>