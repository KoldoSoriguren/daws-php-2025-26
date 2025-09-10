<!DOCTYPE html>

<html>
<body>
    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        function multiplicar($a, $b) {
            return $a * $b;
        }
        echo "El resultado de la multiplicacion de a y b es: " . multiplicar($a, $b) . "<br>";
    
    
    ?>


    
</body>
</html>