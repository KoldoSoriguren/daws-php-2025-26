<?php
$numerosaleat = [] ;
for ($i = 0; $i < 21; $i++) {
    $numerosaleat[$i] = random_int(1, 999);
}

function generarlista($array, $listado="<ul>"){
    $numerobajo = 1000;
    $numeroalto = 0;
    $listado .= "<li>" . "El array generado es: " . implode(", ", $array) . "</li>";
    foreach ($array as $key => $value) {    
        if ($value < $numerobajo) {
            $numerobajo = $value;
        }
        if ($value > $numeroalto) {
            $numeroalto = $value;
        }
    }
    $listado .= "<li>" . "El numero mas bajo es: " . $numerobajo . "</li>";
    $listado .= "<li>" . "El numero mas alto es: " . $numeroalto . "</li>";



    $listado .= "</ul>";
    return $listado;

}




?>