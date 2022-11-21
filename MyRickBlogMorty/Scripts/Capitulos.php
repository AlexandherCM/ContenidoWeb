<?php

if(isset($_POST['mostrar-btn'])){
    $opcion = $_REQUEST['desplegable'];
}else{
    $opcion = 1;
}

$titulo = obtenerNombreCap($opcion);

function obtenerNombreCap($NumeroCap){
    $url = 'https://rickandmortyapi.com/api/episode/'."[".$NumeroCap."]";
    //Envio la url a mi clase para comunicar al api
    $Peticion = new clsObtenerObjeto($url);
    
    //Obtengo mi objeto decodificado
    $Apartado = $Peticion->execute();
    //Entro a el arreglo de personajes
    $ArregloCapitulos = $Apartado;

    foreach($ArregloCapitulos as $Busqueda){
        $Nombre = $Busqueda->name;
    }

    return $Nombre;
}

function ListaTitulos(){
    for($i = 1; $i <= 51; $i++){
        echo '
        <option value="'.$i.'">Capitulo '.$i.': '.obtenerNombreCap($i).'</option>
        ';
    }
}


?>