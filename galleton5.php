<?php
session_start();
$_Usuarios = [
    ["Nombre" => "Pako", "Contraseña" => "123"],
    ["Nombre" => "Manolo", "Contraseña" => "456"],
    ["Nombre" => "root", "Contraseña" => "usbw"]
];
$sesion_iniciada = false;
$intentos = 0;

if(isset($_POST["usuario"]) && isset($_POST["contrasena"])){
    $_Usuario = $_POST["usuario"];
    $_Pass = $_POST["contrasena"];

    foreach ($_Usuarios as $usuario){
        if($usuario["Nombre"] === $_Usuario && $usuario["Contraseña"] === $_Pass){
            $sesion_iniciada = true;
  
        }
    }
    if(!$sesion_iniciada){
        $intentos +=1;

    }
}







if(isset($_GET['accion']) && $_GET['accion'] == 'cerrar_sesion'){
    cerrarSesion(); 
}

function cerrarSesion() {
    session_unset();
    session_destroy();

}

require "galleton5.view.php";





?>