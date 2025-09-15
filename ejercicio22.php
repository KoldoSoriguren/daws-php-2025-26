<?php
    $nombre = $_GET["nombre"] ?? "Brasil";
    $paises = [
        "Brasil", "Portugal","Islandia","Mexico","Filipinas","Marruecos"
    ];
    function saacarposicion($nombre,$paises){
        for ($i=0; $i < count($paises); $i++) { 
            if ($paises[$i]==$nombre) {
                return "El pais $nombre esta en la posicion ".($i+1);
            }
        }
    }
    
    $respuesta=saacarposicion($nombre,$paises);
    var_export($respuesta);

?>