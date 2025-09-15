<?php
$animales = ["Perro", "Gato", "Loro", "Tortuga"];
$colores = ["Rojo", "Azul", "Verde", "Amarillo"];
$nuevoanimal = $_GET['nuevoanimal']?? null;
$nuevoColor = $_GET['nuevoColor']?? null;


function calcular_tamanoa($array) {
    return count($array);
}
$tamanio_animales = calcular_tamanoa($animales);
$tamanio_colores = calcular_tamanoa($colores);
function agregar_elemento($array, $nuevoElemento) {
    $array[] = $nuevoElemento;
    return $array;
}

function agregar_al_principio($array, $nuevoElemento) {
    array_unshift($array, $nuevoElemento);
    return $array;
}

if($nuevoanimal!==null){
    $animales = agregar_elemento($animales, $nuevoanimal);
}
if($nuevoColor!==null){
    $colores = agregar_al_principio($colores, $nuevoColor);
}





?>