<?php
require "galleta5.data.php";
session_start();

if (!isset($_SESSION["cesta"])) {
    $_SESSION["cesta"] = [];
}

$id = $_GET["key"] ?? null;

if ($id && isset($catalogo[$id])&&$acc="enviar") {
    $_SESSION["cesta"][] = $catalogo[$id];
}



function generar_cesta() {
    $total_cesta = 0;
    foreach ($_SESSION["cesta"] as $producto) {
        $total_cesta += $producto["precio"];
    }
    return $total_cesta;
}

$precio_compra = generar_cesta();

if($acc=="vaciar_lista"){
    $precio_compra=0;
    $_SESSION["cesta"] = [];

}

include "galleta5.view.php";
