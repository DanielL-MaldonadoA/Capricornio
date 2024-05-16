<?php
if(!empty($_GET["CodigoEspecialidad"])){
include ("bd.php");
$CodigoEspecialidad=$_GET["CodigoEspecialidad"];

$ConsultaDel="DELETE FROM especialidad WHERE especialidad.CodigoEspecialidad = ".$CodigoEspecialidad;

//echo $ConsultaDel;

$ResultadoDel=false;

try {
    $ResultadoDel= mysqli_query($Conexion, $ConsultaDel);
   }
    catch (Exception $e)
    { $Mensaje="Se pududo eliminar la especialidad con CodigoEspecialidad: ".$CodigoEspecialidad;
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($ResultadoDel == false) { $Mensaje="No se pudo eliminar la especialidad con CodigoEspecialidad: ".$CodigoEspecialidad;
       //die($mysqli_error($Conexion));
   }
    else { $Mensaje="Se pudo eliminar la especialidad con CodigoEspecialidad: ".$CodigoEspecialidad;}
        
    echo $Mensaje;
    
}

?>