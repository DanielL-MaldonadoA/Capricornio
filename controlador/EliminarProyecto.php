<?php
if(!empty($_GET["CodigoProyecto"])){
include ("bd.php");
$CodigoProyecto=$_GET["CodigoProyecto"];

$ConsultaDel="DELETE FROM proyecto WHERE proyecto.CodigoProyecto = ".$CodigoProyecto;

//echo $ConsultaDel;

$ResultadoDel=false;

try {
    $ResultadoDel= mysqli_query($Conexion, $ConsultaDel);
   }
    catch (Exception $e)
    { $Mensaje="se pududo eliminar el proyecto con codigo: ".$CodigoProyecto;
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($ResultadoDel == false) { $Mensaje="No se pudo eliminar el proyecto con codigo: ".$CodigoProyecto;
       //die($mysqli_error($Conexion));
   }
    else { $Mensaje="se pudo eliminar el proyecto con codigo: ".$CodigoProyecto;}
        
    echo $Mensaje;
    
}

?>