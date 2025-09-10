<!DOCTYPE html>
<html>

<body>
    <?php
        $a = $_GET['a'];
        $b = $_GET['b'];

        function esMayor($a, $b) {
            return $a > $b ? "true" : "false";
        }
        echo "Es a mayor que b? " . (esMayor($a, $b)   ) . "<br>";



    ?>    

    
</body>
</html>