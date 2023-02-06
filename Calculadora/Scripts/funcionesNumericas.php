<?php
require 'clsSubirBD.php';

function ConversionDecimal($opcion,$numIngresado)
{
    switch ($opcion)
    {
        case 0:
            echo "No ha seleccionado alguna opción...";
            break;
        case 1:
            echo $numIngresado;
            $Subir = new clsSubirBd($numIngresado,$numIngresado);
            $Subir->Subir();
            break;
            case 2:
            $resultado = decbin($numIngresado);
            echo $resultado ;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            break;
        case 3:
            $resultado = decoct($numIngresado);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            break;
        case 4:
            $resultado = dechex($numIngresado);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            break;
    }

}
function ConversionBinario($opcion,$numIngresado)
{
    switch ($opcion)
    {
        case 0:
            echo "No ha seleccionado alguna opción...";
            break;
        case 1:
            //DECIMAL
            $resultado = bindec($numIngresado);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 2:
            //BINARIO
            echo $numIngresado;
            $Subir = new clsSubirBd($numIngresado,$numIngresado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 3:
            //OCTAL
            $resultado = base_convert($numIngresado, 2, 8);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 4:
            //HEXADECIMAL
            $resultado = base_convert($numIngresado, 2, 16);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
    }
}
function ConversionOctal($opcion,$numIngresado)
{
    switch($opcion)
    {
        case 0:
            echo "No ha seleccionado alguna opción...";
            break;
        case 1:
            //DECIMAL
            $resultado = octdec($numIngresado);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 2:
            //BINARIO
            $resultado = base_convert($numIngresado, 8, 2);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 3:
            //OCTAL
            echo $numIngresado;
            $Subir = new clsSubirBd($numIngresado,$numIngresado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 4:
            //HEXADECIMAL
            $resultado = base_convert($numIngresado, 8, 16);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
    }
}
function ConversionHexadecimal($opcion,$numIngresado)
{
    switch ($opcion)
    {
        case 0:
            echo "No ha seleccionado alguna opción...";
            break;
        case 1:
            //DECIMAL
            $resultado = hexdec($numIngresado);
            echo $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 2:
            //BINARIO
            $resultado = base_convert($numIngresado, 16,2);
            echo  $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 3:
            //OCTAL
            $resultado = base_convert($numIngresado, 16,8);
            echo  $resultado;
            $Subir = new clsSubirBd($numIngresado,$resultado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
        case 4:
            //HEXADECIMAL
            echo $numIngresado;
            $Subir = new clsSubirBd($numIngresado,$numIngresado);
            $Subir->Subir();
            $resultado = 0;
            $numIngresado = 0;
            break;
    }
}


















?>