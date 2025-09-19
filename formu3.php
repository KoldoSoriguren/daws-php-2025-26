<?php
    $Asunto = $_POST["asunto"]??null;
    $Email = $_POST["email"]??null;
    $Motivo = $_POST["motivo"]??null;
    $Mensaje = $_POST["mensaje"]??null;

    function validar($Asunto, $Email, $Motivo, $Mensaje){
        if(empty($Asunto) || empty($Email) || empty($Motivo) || empty($Mensaje)){
            return "Error: Todos los campos son obligatorios.";
        }
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
            return "Error: El email no es válido.";
        }
        return "Formulario enviado correctamente.";
    }







    include "formu3.view.php";

?>