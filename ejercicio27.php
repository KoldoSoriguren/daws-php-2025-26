<?php
$_Agenda = ["ACDC","Metallica","Nirvana","Queen","Mago de os","U2","The Beatles","Guns n Roses"] ;
function inprime($array, $Listado="<ul>"){
    foreach( $array as $key ){
        $Listado .= "<li>" . $key . "</li>";
    }
    $Listado .= "</ul>";
    return $Listado;
}

?>