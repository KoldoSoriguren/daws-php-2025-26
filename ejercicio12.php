<?php
$nombres = ["Paris", "Berlin", "Amsterdan", "Praga"];
$posicion = $_GET['posicion'] ?? 0;
$nuevoNombre = $_GET['nuevoNombre'] ?? "Roma";
function getValor($nombres, $posicion) {

    return $nombres[$posicion];
}
$nombre = getValor($nombres, $posicion);
function setArray($nombres, $nuevoNombre, $posicion) {
    $nombres[$posicion] = $nuevoNombre;
    return $nombres;

}
$nombres = setArray($nombres, $nuevoNombre, $posicion);


?>