<?php 
class clsSubirBd{
    private $NumIng;
    private $NumObt;

    public function __construct($NumIng, $NumObt){
        $this->NumIng = $NumIng;
        $this->NumObt = $NumObt;
    }
    
    public function Subir(){
        $conexion = new mysqli("localhost", "root", "", "calculadora");
        date_default_timezone_set('America/Mexico_City');
        $Hora = date('H:i:s');
        $Fecha = date('Y-m-d');

        if ($conexion->connect_error){
            die("ERROR: No se pudo conectar al servidor" . $conexion->connect_error);
        }

        $Query = "INSERT INTO Operaciones(NumeroIngresado, NumeroConvertido, Fecha, Hora)VALUES ('$this->NumIng' , '$this->NumObt', '$Fecha' , '$Hora')";
        
        if (mysqli_query($conexion, $Query)) {
            echo '<script>alert("Registro guardado correctamente");</script>';
        }else 
        {
            echo '<script>alert("Hubo un error");</script>';
        }

        $conexion->close();
    }
}

?>