<?php
if (isset($_POST["borrar"])) {
    setcookie("usuario", "", time() - 3600); // Expira la cookie
    $usuario = null;
} else {
    // Si hay POST con usuario, lo guardamos
    $usuario = $_POST["usuario"] ?? ($_COOKIE["usuario"] ?? null);

    if (isset($_POST["usuario"])) {
        setcookie("usuario", $usuario, time() + 3600); // Cookie dura 1 hora
    }
}

require "galleton.view.php";
