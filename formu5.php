<?php

require "formu5.data.php";
$array_productos_selecctionados = [];


foreach ($catalogo as $clave => $valor) {
    if ($_POST[$clave] > 0) { 
        $array_productos_selecctionados[$clave] = $_POST[$clave];
    }
}

function generar_cesta($catalogo, $array_productos_selecctionados){
    $total_cesta = 0;
    foreach ($array_productos_selecctionados as $clave => $cantidad) {
        $total_cesta += $catalogo[$clave]["precio"] * $cantidad;
    }
    return $total_cesta;
}
$precio_compra = generar_cesta($catalogo, $array_productos_selecctionados);



include "formu5.view.php";




?>