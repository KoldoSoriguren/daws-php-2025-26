<?php
    $numero=$_GET["numero"] ?? null;
    $respuesta=0;
    for ($i= 1; $i < $numero; $i++) {
      

        $respuesta=$respuesta+$i;
    
        if ($respuesta>100) {
            $respuesta=$respuesta-$i;
        }
    
    }
    var_export($respuesta);
?>