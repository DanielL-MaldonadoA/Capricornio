<?php 
include("bd.php");  
If (!empty($_GET["CodigoProyecto"])){
   $Consulta="select* from proyecto where CodigoProyecto =
   ".$_GET["CodigoProyecto"];
   $Resultado=false;
   try {
   $Resultado= mysqli_query($Conexion, $Consulta);
  }
   catch (Exception $e)
   { $Mensaje="No se pudo consultar el PROYECTO con código ".$_GET["CodigoProyecto"];
      //$error=$e->getMessage();
      //print $e->getMessage();
      //print $Resultado;
   } 
   if ($Resultado == false) { $Mensaje="No se pudo consultar el estudiante con código ".$_GET["CodigoProyecto"];
  }
   else {$Mensaje="Se pudo consultar el PROYECTO con código ".$_GET["CodigoProyecto"];}
   $Registro=$Resultado->fetch_assoc();

}
else if (!empty($_POST["CodigoProyecto"])&& !empty($_POST["CodigoProyecto"]) && !empty($_POST["NombreProyecto"]) && !empty($_POST["Resumen"]) && !empty($_POST["FechaRegistro"])) {
     $CodigoProyecto = $_POST["CodigoProyecto"];
     $NombreProyecto = $_POST["NombreProyecto"];
     $Resumen = $_POST["Resumen"];
     $FechaRegistro = $_POST["FechaRegistro"];
     
     $Consulta="UPDATE proyecto SET CodigoProyecto = '".$CodigoProyecto."', NombreProyecto = '".$NombreProyecto."', Resumen = '".$Resumen."', FechaRegistro = '".$FechaRegistro."'WHERE proyecto.CodigoProyecto = ".$_POST["CodigoActualPRO"]; 
     
     echo $Consulta;
     $Resultado=false;
     try {
     $Resultado= mysqli_query($Conexion, $Consulta);
    }
     catch (Exception $e)
     { $Mensaje="No se pudo registrar el proyecto por error en los datos";
        //$error=$e->getMessage();
        
        //print $e->getMessage();
        //print $Resultado;
     } 
     if ($Resultado == false) { $Mensaje="No se pudo actualizar al proyecto";
    }
     else {$Mensaje="El proyecto se actualizo correctamente :D";
      //echo $Consulta;
      header('Location: proyectos.php');
   }
    } //Fin del If
    else{
    $Mensaje="<h3>El Código del Proyecto, Nombre del Proyecto, Resumen,Fecha de Registro son campos obligatorios</h3>";
    }
    echo "<h3>".$Mensaje."</h3>"

    
 ?>