<!DOCTYPE html>
<html>

<body>
    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];
        echo "El resultado de la resta de a y b es: " . ($a - $b) . "<br>";
        echo "El resultado de la division entre a y b es: " . ($a / $b) . "<br>";
        echo "Es a mayor que b? <br>" . ($a > $b ? 'si' : 'no') . "<br>";
        echo "Es a menor o igual que b? <br>" . ($a <= $b ? 'si' : 'no') . "<br>";
    ?>
    
</body>
</html>