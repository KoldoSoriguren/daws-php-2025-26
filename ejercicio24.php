<?php
    $_Agenda = [
        [
            "nombre" => "Amaia",
            "apellidos" => "Gorbea Jainaga",
            "telefono"=> "945 67 89 01",
            "email"=> "agorbea@php.net",
        ],
        [
            "nombre" => "Markel",
            "apellidos" => "Landa Etxebarria",
            "telefono"=> "945 67 89 02",
            "email"=> "markel@g,ail.com"
        ],
        [
            "nombre" => "Nora",
            "apellidos" => "Gonzalez Perez",
            "telefono"=> "945 67 89 03",
            "email"=> "nora@gmail.com"


        ],
        [
            "nombre" => "Danel",
            "apellidos" => "Ibarrola Ruiz",
            "telefono"=> "945 67 89 04",
            "email"=> "cuentaflasa@gmail.com"
        ],
        [
            "nombre" => "Ane",
            "apellidos" => "Garcia Lopez",
            "telefono"=> "945 67 89 05",
            "email"=> "Ane@gmail.com"
        ]


    ];
    $respuesta = "";
    $respuesta .= "<tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                    </tr>";
    for ($i = 0; $i < count($_Agenda); $i++) {
        $respuesta .= "<tr>";
        $respuesta .= "<td>" . $_Agenda[$i]["nombre"] . "</td>";
        $respuesta .= "<td>" . $_Agenda[$i]["apellidos"] . "</td>";
        $respuesta .= "<td>" . $_Agenda[$i]["telefono"] . "</td>";
        $respuesta .= "<td>" . $_Agenda[$i]["email"] . "</td>";
        $respuesta .= "</tr>";
    }   
    var_export($respuesta);


?>