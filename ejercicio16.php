<?php

$numero1 = $_GET['numero1'] ?? null;
$numero2 = $_GET['numero2'] ?? null;


function funcionQueFlipas($numero1, $numero2) {
    if ($numero1 != $numero2) {
        return $numero1 + $numero2;
    }else {
        return $numero1 * $numero2;
    }
    
}
$numero3 = funcionQueFlipas($numero1, $numero2);





?>