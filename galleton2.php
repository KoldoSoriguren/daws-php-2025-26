<?php
$idioma = $_POST["idioma"] ?? ($_COOKIE["idioma"] ?? null);
if (isset($_POST["idioma"])) {
    setcookie("idioma", $_POST["idioma"], time() + 60);
    


}








require "galleton2.view.php";
