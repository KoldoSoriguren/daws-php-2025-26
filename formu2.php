<?php
    $numero1 = $_GET["num1"]??null;
    $numero2 = $_GET["num2"]??null;
    $operacion = $_GET["operacion"]??null;
    function operaciones($numero1, $numero2, $operacion){
        switch($operacion){
            case "sumar":
                return $numero1 + $numero2;
            case "restar":
                return $numero1 - $numero2;
            case "multiplicar":
                return $numero1 * $numero2;
            case "dividir":
                if($numero2 != 0){
                    return $numero1 / $numero2;
                }else{
                    return "Error: División por cero";
                }
            default:
                return "Operación no válida";
        }
    }






    include "formu2.view.php";
?>