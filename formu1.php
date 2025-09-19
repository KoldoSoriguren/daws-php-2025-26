<?php

    $cantidad =$_GET['grados'];
    $formato =$_GET['formato'];
    
  
    function conversion($cantidad, $formato){
        if($formato == "C"){
            $resultado = ($cantidad * 9/5) + 32;
            return $resultado;
        }else if($formato == "F"){
            $resultado = ($cantidad - 32) * 5/9;
            return $resultado;
        }

    }

        include 'formu.view.php';








?>