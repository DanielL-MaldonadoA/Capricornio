<?php
include ("bd.php");

$consultaE="select * from especialidad where CodigoEspecialidad='".$Registro["CodigoEspecialidad"]."'";

$ResultadoE=false;

try {
    $ResultadoE= mysqli_query($Conexion, $consultaE);
   }
    catch (Exception $e)
    { $Mensaje="No se pudo consultar la especialidad";
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($ResultadoE == false) { $Mensaje="No se pudo consultar la especialidad";
       //die($mysqli_error($Conexion));
   }
    else {
        
        $RegistroE=$ResultadoE->fetch_assoc();
        echo $RegistroE["NombreEspecialidad"];

    }

?>