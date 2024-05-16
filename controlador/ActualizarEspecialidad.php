<?php 
include("bd.php");  
If (!empty($_GET["CodigoEspecialidad"])){
   $Consulta="SELECT * FROM especialidad WHERE CodigoEspecialidad =
   ".$_GET["CodigoEspecialidad"];
   $Resultado=false;
   try {
   $Resultado= mysqli_query($Conexion, $Consulta);
  }
   catch (Exception $e)
   { $Mensaje="No se pudo consultar el estudiante con código ".$_GET["CodigoEspecialidad"];
      //$error=$e->getMessage();
      //print $e->getMessage();
      //print $Resultado;
   } 
   if ($Resultado == false) { $Mensaje="No se pudo consultar el estudiante con código ".$_GET["CodigoEspecialidad"];
  }
   else {$Mensaje="Se pudo consultar la Especialidad ".$_GET["CodigoEspecialidad"];}
   $Registro=$Resultado->fetch_assoc();

}
else if (!empty($_POST["CodigoEspecialidad"]) && !empty($_POST["NombreEspecialidad"])) {
     $CodigoESP = $_POST["CodigoEspecialidad"];
     $NombreEspecialidad = $_POST["NombreEspecialidad"];
     

     $Consulta=" UPDATE especialidad SET NombreEspecialidad = '".$NombreEspecialidad."', CodigoEspecialidad = '".$CodigoESP."' WHERE especialidad.CodigoEspecialidad = ".$_POST["CodigoActualE"];

     echo $Consulta;
     $Resultado=false;
     try {
     $Resultado= mysqli_query($Conexion, $Consulta);
    }
     catch (Exception $e)
     { $Mensaje="No se pudo registrar los datos de la especialidad";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
     } 
     if ($Resultado == false) { $Mensaje="No se pudo actualizar la especialidad";
    }
     else {$Mensaje="La especialidad se actualizo correctamente :D";
      //echo $Consulta;
      header('Location: Especialidades.php');
   }
    } //Fin del If
    else{
    $Mensaje="<h3>El Código Especialidad y Nombre Especialidad son campos OBLIGATORIOS</h3>";
    }
    echo "<h3>".$Mensaje."</h3>"

    
 ?>