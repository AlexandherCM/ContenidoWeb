<?php
class clsObtenerObjeto{
    protected $url;

    public function __construct($url){
        $this->url = $url;
    }

    public function execute(){
        //  Inicializo curl
        $ch = curl_init();
        // Devolverá la respuesta
        curl_setopt($ch, CURLOPT_URL, $this->url);
        // Tranferirá la respuesta
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
        // Execute
        $respuesta = curl_exec($ch);
        // Closing
        curl_close($ch);

        //Obtengo mi objeto decodificado
        $datos = json_decode($respuesta);
        $apartados = $datos;

        //Retorno mi objeto decodificado
        return $apartados;
    }
}








// Code - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
/* $datos = json_decode($respuesta);
$personajes = $datos->results;  */

/* $id = 0;

if(isset($_GET["number-img"])){
    $id = $_GET["number-img"];
} */





// // Variables petición - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// if(isset($_GET["number-img"])){
//     foreach($personajes as $Busqueda){
//         if($id == $Busqueda->id){
//             $imagen = $Busqueda->image; 
//         }//if
//     }//foreach
// }//if
   










    /* echo "<img src='$personaje->image'>";
    echo "<br>";
    echo "<h1>$personaje->name</h1>";
    echo "<h1>$personaje->status</h1>";
    echo"<center>"; */
?>