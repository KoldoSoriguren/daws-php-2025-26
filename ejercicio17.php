<?php
    $usuarios = [
        "usuario1" => [
            "nombre" => "Juan",
            "password" => "1234",
            "email" => "juan@gmail.com"
        ],
        "usuario2" =>[ 
            "nombre" => "Ana",
            "password" => "5678",
            "email" => "ana@gmail.com"
        ],  
        "usuario3" =>[ 
            "nombre" => "Luis",
            "password" => "abcd",
            "email" => "a@gmail.com"
        ]
    ];
    $nombre = $_GET['nombre'] ?? null;
    $password = $_GET['password'] ?? null;

    function comprobarUsuario($nombre, $password, $usuarios) {
        foreach ($usuarios as $usuario) {
            if ($usuario['nombre'] === $nombre && $usuario['password'] === $password) {
                return "Acceso concedido. Email: " . $usuario['email'];
            }
        }
        return "Acceso denegado. Usuario o contraseña incorrectos.";
    }
    $resultado = comprobarUsuario($nombre, $password, $usuarios);





?>