<?php

$_Medias = array(
    array(
        "Nombre" => "Amaia",
        "Media"  => "6.5"
    ),
    array(
        "Nombre"=> "Ane",
        "Media"=> "7.5"
    ),
    array(
        "Nombre"=> "Maite",
        "Media"=> "5.2"
    ) ,
    array(
        "Nombre"=> "Lorea",
        "Media"=> "9.1"
    ) ,
    array(
        "Nombre"=> "Markel",
        "Media"=> "6.8"
    ) ,
    array(
        "Nombre"=> "Urtzi",
        "Media"=> "8.4"
    )
);

function inprime($array, $Listado="<ul>"){
    foreach( $array as $key ){
        $Listado .= "<li>" .  " La nota media de " .  $key['Nombre'] . " es " . 
         $key['Media'] . "</li>";
    }
    $Listado .= "</ul>";
    return $Listado;
}

?>
