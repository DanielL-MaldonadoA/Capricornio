<?php
if(!empty($_GET["CodigoEstudiante"])){
include ("bd.php");
$CodigoEstudiante=$_GET["CodigoEstudiante"];

$ConsultaDel="DELETE FROM estudiante WHERE estudiante.CodigoEstudiante = ".$CodigoEstudiante;

//echo $ConsultaDel;

$ResultadoDel=false;

try {
    $ResultadoDel= mysqli_query($Conexion, $ConsultaDel);
   }
    catch (Exception $e)
    { $Mensaje="se pududo eliminar el estudiante con codigo: ".$CodigoEstudiante;
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($ResultadoDel == false) { $Mensaje="No se pudo eliminar el estudiante con codigo: ".$CodigoEstudiante;
       //die($mysqli_error($Conexion));
   }
    else { $Mensaje="se pudo eliminar el estudiante con codigo: ".$CodigoEstudiante;}
        
    echo $Mensaje;
    
}

?>