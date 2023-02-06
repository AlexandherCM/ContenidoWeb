<?php
require 'funcionesNumericas.php';

function Sistema(){
    
    // función  - - - - - - - - - - - - - - - -  -->
    if(isset ($_REQUEST["convertir"]))
    {
        // Evento convertir  - - - - - - - - - - - - - - - -  -->
        $numero = $_REQUEST["numero"];
        $op1 = $_REQUEST["opcion1"];
        $op2 = $_REQUEST["opcion2"];

        if(empty($_POST['numero']) || empty($_POST['numero']) || empty($_POST['numero']))
        {
            // Validar  - - - - - - - - - - - - - - - -  -->
            echo "Rellene todos los campos"; 
            return;
            // Validar  - - - - - - - - - - - - - - - -  -->
        }
        // Selección de sistema  - - - - - - - - - - - - - - - -  -->
        switch ($op1)
        {
            // NADA  - - - - - - - - - - - - - - - -  -->
            case 0:
                echo "No ha seleccionado alguna opción...";
                break;
                // DECIMAL -> Sistema - - - - - - - - - - - - - - - -  -->
            case 1:
                ConversionDecimal($op2,$numero);
                break;
                // BINARIO -> Sistema  - - - - - - - - - - - - - - - -  -->
            case 2:
                ConversionBinario($op2,$numero);
                break;
            case 3:
                // OCTAL -> Sistema  - - - - - - - - - - - - - - - -  -->
                ConversionOctal($op2,$numero);
                break;
                // HEXADECIMAL -> Sistema - - - - - - - - - - - - - - - -  -->
            case 4:
                ConversionHexadecimal($op2,$numero);
                break;
            // Selección de sistema  - - - - - - - - - - - - - - - -  -->
        }
        // Evento convertir  - - - - - - - - - - - - - - - -  -->
    }
    // función  - - - - - - - - - - - - - - - -  -->
}
 
?>