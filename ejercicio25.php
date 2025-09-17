<?php
    $_Agenda = ["Audi", "Seat", "Mercedes", "Wolksvagen", "BMW", "Fiat"];

    $i = 0;



    function sacarlista($array, $listado = "<ul>") {
        $i = 0;
        
        while ($i < count($array)) {
            $listado .= "<li>" . $array[$i] . "</li>";
            $i++;
        }
        $listado .= "</ul>";
        return $listado;
    }
    function sacarlista2($array, $listado = "<ul>") {
        $i = 0;
        do {
            $listado .= "<li>" . $array[$i] . "</li>";
            $i++;
        } while ($i < count($array));
        $listado .= "</ul>";
        return $listado;
    }
    function sacarlista3($array, $listado = "<ul>"){
        foreach ($array as $key) {
            $listado .= "<li>" . $key . "</li>";
        }
        $listado .= "</ul>";
        return $listado;
    }

?>
