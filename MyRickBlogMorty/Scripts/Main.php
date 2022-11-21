<?php
require 'clsObtenerObjeto.php';
$id = 0;

if(isset($_POST["IdPersonaje"])){
    $id = $_POST["IdPersonaje"];
    $Caracteristicas = BuscarPersonaje($id);   
}

if(empty($Caracteristicas) || $id > 826 || $id <= 0){
    $v = "Sin datos :(";
    $Caracteristicas[0] = "../Recursos/Search.png";
    $Caracteristicas[1] = $v;
    $Caracteristicas[2] = $v;
    $Caracteristicas[3] = $v;
    $Caracteristicas[4] = $v;
    $Caracteristicas[5] = $v;
}

    // $Peticion = new clsObtenerObjeto('https://rickandmortyapi.com/api/episode/1');
    // $Apartado = $Peticion->execute();

function PersonajesCap($NumeroCap){
    $url = 'https://rickandmortyapi.com/api/episode/'.$NumeroCap;
    //Envio la url a mi clase para comunicar al api
    $Peticion = new clsObtenerObjeto($url);
    
    //Obtengo mi objeto decodificado
    $Apartado = $Peticion->execute();
    //Entro a el arreglo de personajes
    $ArregloPersonajes = $Apartado->characters;

    foreach($ArregloPersonajes as $Busqueda){

        $NewPeticion = new clsObtenerObjeto($Busqueda);
        $ApartadosPersonaje = $NewPeticion->execute();

        if($ApartadosPersonaje->status == "Alive"){
            $Estado = "Vivo";
        }
        else if($ApartadosPersonaje->status == "Dead"){
            $Estado = "Muerto";
        }
        else if($ApartadosPersonaje->status == "unknown"){
            $Estado = "Desconocido";
        }

        if($ApartadosPersonaje->species == "Human"){
            $Especie = "Humano";
        }else{
            $Especie = $ApartadosPersonaje->species;
        }

        if($ApartadosPersonaje->gender == "Female"){
            $Genero = "Femenino";
        }
        else if($ApartadosPersonaje->gender == "Male"){
            $Genero = "Masculino";
        }
        else if($ApartadosPersonaje->gender == "Genderless"){
            $Genero = "Amigue";
        }
        else if($ApartadosPersonaje->gender == "unknown"){
            $Genero = "Desconocido";
        }

        echo "
        <div class='Cont-imgs'> 
            <img class='img-PersonC-1' src='$ApartadosPersonaje->image'>
            <div class='datos-Personaje'>
                <p> ID: $ApartadosPersonaje->id </p>
                <p> Nombre: $ApartadosPersonaje->name </p>
                <p> Estado: $Estado  </p>
                <p> Especie: $Especie </p>
                <p> Género: $Genero </p>
            </div>
        </div>
            ";
    }
}

function BuscarPersonaje($id){
    $url='https://rickandmortyapi.com/api/character/'."[".$id."]";

    $Peticion = new clsObtenerObjeto($url);
    $AtributosPersonajes = $Peticion->execute();
    //$AtributosPersonajes = $Apartado->results;
    $imagen = "";
    $ID = "";
    $Nombre = "";
    $Estado = "";
    $Especie = "";
    $Genero = "";

    if(empty($id)){
        $contenedor = array();
        array_push($contenedor,$imagen,$ID,$Nombre,$Estado,$Especie,$Genero);
        return $contenedor;
    }else{
        foreach($AtributosPersonajes as $Buscar){
            $imagen = $Buscar->image;
            $Nombre = $Buscar->name;
            $ID = $Buscar->id;
            // - - - - - - - - - - - - - - - - - - - - 
            if($Buscar->status == "Alive"){
                $Estado = "Vivo";
            }
            else if($Buscar->status == "Dead"){
                $Estado = "Muerto";
            }
            else if($Buscar->status == "unknown"){
                $Estado = "Desconocido";
            }
            // - - - - - - - - - - - - - - - - - - - - 
            if($Buscar->species == "Human"){
                $Especie = "Humano";
            }else{
                $Especie = $Buscar->species;
            }
            // - - - - - - - - - - - - - - - - - - - - 
    
            if($Buscar->gender == "Female"){
                $Genero = "Femenino";
            }
            else if($Buscar->gender == "Male"){
                $Genero = "Masculino";
            }
            else if($Buscar->gender == "Genderless"){
                $Genero = "Amigue";
            }
            else if($Buscar->gender == "unknown"){
                $Genero = "Desconocido";
            }
        }
        $contenedor = array();
        array_push($contenedor,$imagen,$ID,$Nombre,$Estado,$Especie,$Genero);
        return $contenedor;
    }
}

function Random(){
        $random1 = rand(1, 826);
        $random2 = rand(1, 826);
        $random3 = rand(1, 826);

        $url = 'https://rickandmortyapi.com/api/character/'."[".$random1.",".$random2.",".$random3."]";

        $Peticion = new clsObtenerObjeto($url);
            
        $personajes = $Peticion->execute();

        foreach($personajes as $personaje)
        {

            if($personaje->status == "Alive"){
                $Estado = "Vivo";
            }
            else if($personaje->status == "Dead"){
                $Estado = "Muerto";
            }
            else if($personaje->status == "unknown"){
                $Estado = "Desconocido";
            }
    
            if($personaje->species == "Human"){
                $Especie = "Humano";
            }else{
                $Especie = $personaje->species;
            }
    
            if($personaje->gender == "Female"){
                $Genero = "Femenino";
            }
            else if($personaje->gender == "Male"){
                $Genero = "Masculino";
            }
            else if($personaje->gender == "Genderless"){
                $Genero = "Amigue";
            }
            else if($personaje->gender == "unknown"){
                $Genero = "Desconocido";
            }
        
            echo "
            <div class='datos-int'> 
                <img src='$personaje->image'>
                <br><br><br><br>
                <div class='parrafos , p2'>
                    <p> ID: $personaje->id </p>
                    <p> Nombre: $personaje->name </p>
                    <p> Estado: $Estado  </p>
                    <p> Especie: $Especie</p>
                    <p> Género: $Genero  </p>
                </div>
            </div>
            ";
        }
}
    
?>