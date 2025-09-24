<?php
session_start();

// Crear el array si no existe
if(!isset($_SESSION["asistentes"])){
    $_SESSION["asistentes"] = [] ;
}

// Añadir asistente
if(isset($_POST["asistente"])){
    $nombre = trim($_POST["asistente"]);
    
    $_SESSION["asistentes"][] = $nombre;
    
}

// Vaciar lista
if(isset($_POST["borrar"])){
    $_SESSION["asistentes"] = [];
}

require "galleton4.view.php";
?>
