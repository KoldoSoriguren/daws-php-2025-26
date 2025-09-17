<?php
$_Notas = array(
    array(
        "Nombre" => "Luis Scola",
        "Nota1"  => 9,
        "Nota2"  => 8
    ),
    array(
        "Nombre"=> "Pablo Prigioni",
        "Nota1"=> 8,
        "Nota2"=> 4
    ),
    array(
        "Nombre"=> "Sergi Vidal",
        "Nota1"=> 7,
        "Nota2"=> 6
    ) ,
    array(
        "Nombre"=> "Ramon Rivas",
        "Nota1"=> 3.5,
        "Nota2"=> 6
    )


) ;

function tablaNotas($array, $tabla="<table border='2'>"){
    $tabla .= "<tr><th>Nombre</th><th>Nota 1</th><th>Nota 2</th><th>Media</th></tr>";
    foreach( $array as $key ){
        $media = ($key['Nota1'] + $key['Nota2']) / 2 ;

        // Si está suspensa → borde rojo
        $style1 = $key['Nota1'] < 5 ? "style='color:red; border:2px solid red;'" : "style='color:green; border:2px solid green;'";
        $style2 = $key['Nota2'] < 5 ? "style='color:red; border:2px solid red;'" : "style='color:green; border:2px solid green;'";
        $styleMedia = $media < 5 ? "style='color:red; border:2px solid red;'" : "style='color:green; border:2px solid green;'";

        $tabla .= "<tr>
        <td>" .  $key['Nombre'] . "</td>
        <td $style1>" . $key["Nota1"] . "</td>
        <td $style2>" . $key["Nota2"] . "</td>
        <td $styleMedia>" . $media . "</td>
        </tr>";
    }
    $tabla .= "</table>";
    return $tabla;
}


?>