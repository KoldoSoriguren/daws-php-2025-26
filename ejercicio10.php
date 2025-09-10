<!DOCTYPE html>
<html>
<body>
    <?php

        
        $c1 = $_GET['c1'];
        $c2 = $_GET['c2'];
        function concatenar($c1, $c2 = "Yenkings") {
        
            return $c1 . " " . $c2;
        }
        echo concatenar($c1, $c2);
    ?>

       
    
</body>
</html>