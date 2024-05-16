<?php
include ("bd.php");

$consultaP="select * from proyecto where CodigoProyecto='".$Registro["CodigoProyecto"]."'";

$ResultadoP=false;

try {
    $ResultadoP= mysqli_query($Conexion, $consultaP);
   }
    catch (Exception $e)
    { $Mensaje="No se pudo consultar el proyecto";
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($ResultadoP == false) { $Mensaje="No se pudo consultar el proyecto";
       //die($mysqli_error($Conexion));
   }
    else {
        
        $RegistroP=$ResultadoP->fetch_assoc();
        echo $RegistroP["NombreProyecto"];

    }

?>