<?php
 
    $traducciones =[
        "Casa" => "House",
        "Perro" => "Dog",
        "Gato" => "Cat",
        "Mono" => "Yassir",
        "Mesa" => "Table"

    ];
    $traducir = $_GET['traducir']?? null;

    function traducir($traducir, $array){
        if (array_key_exists($traducir,$array)){
            return "La traduccion de " . $traducir . " Al ingles es " . $array[$traducir];
        }else{
            return "No se ha encontrado la traduccion de " . $traducir;
        }
    }
    $resultado = traducir($traducir, $traducciones);

    




?>