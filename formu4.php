<?php
    $_Agenda = array(
        "user1" => array(
            "nombre" => "Ane",
            "apellidos" => "Lopez",
            "password" => "123Abc"
        ),
        "user2" => array(
            "nombre" => "Amaia",
            "apellidos" => "Otsoa",
            "password" => "456Xyz"
        ),
        "user3" => array(
            "nombre"=> "root",
            "apellidos"=> "a",
            "password"=> "usbw"
        )

    );
    $nombre = $_POST["nombre"]??null;
    $password = $_POST["password"]??null;

    function devolverda($nombre, $password, $_Agenda) {
        foreach ($_Agenda as $user) {
            if ($user["nombre"] == $nombre && $user["password"] == $password) {
                return $user;
            }
        }
        return false;
    }
    function buscarApellidos($nombre, $_Agenda) {
        foreach ($_Agenda as $user) {
            if ($user["nombre"] == $nombre) {
                return $user["apellidos"];
            }
        }
        return null;
    }

    include "formu4.view.php";


?>