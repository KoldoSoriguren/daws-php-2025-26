<?php
 $diccionario = array(
    "usuario1" => array(
        "nombre" => "Juan",
        "apellidos" => "Pérez López",
        "email" => "juan@example.com"
    ),
    "usuario2" => array(
        "nombre" => "María",
        "apellidos" => "Gómez Sánchez",
        "email" => "maria@example.com"
    ),
    "usuario3" => array(
        "nombre" => "Pedro",
        "apellidos" => "Ramírez Torres",
        "email" => "pedro@example.com"
    )
    );
    $nombre = $_GET['nombre'] ?? null;
    function buscarUsuario($nombre, $diccionario) {
        foreach ($diccionario as $usuario) {
            if (strcasecmp($usuario['nombre'], $nombre) == 0) {
                return "Nombre: " . $usuario['nombre'] . ", Apellidos: " . $usuario['apellidos'] . ", Email: " . $usuario['email'];
            }
        }
        return "Usuario no encontrado.";
    }
    $resultado = buscarUsuario($nombre, $diccionario);
    

    

    




?>