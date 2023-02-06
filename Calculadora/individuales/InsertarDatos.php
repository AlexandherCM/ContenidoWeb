<?php
require 'ConexionBD.php';

    if(empty($_POST['numero']) && empty($_POST['convertirNum']))
    {
        echo '<script>alert("Aún hay campos vacios!")</script>';
    }else
    {
        $NumIng = $_POST['numero'];
        $NumObt = $_POST['convertirNum'];
        $Hora = date('h:i:s A');
        $Fecha = date('d/m/y');
        $sql = "INSERT INTO Operaciones(NumeroIngresado, NumeroConvertido, Fecha, Hora)VALUES ('$numero' , '$resultado', '$Fecha' , '$Hora')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Registro guardado correctamente");</script>';
        }else 
        {
            echo '<script>alert("Hubo un error");</script>';
        }
        $conn->close();
    }
?>