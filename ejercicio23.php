<?php
    $nombres = ["Ane", "Markel", "Nora", "Danel", "Amaia", "Izaro"];

    $respuesta = "";
    for ($i = 0; $i < count($nombres); $i++) {
        $respuesta .= "<li>" . $nombres[$i] . "</li>";
    }
    var_export($respuesta);


?>