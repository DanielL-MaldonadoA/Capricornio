<?php 
include("bd.php");  
If (!empty($_GET["CodigoEstudiante"])){
   $Consulta="select* from estudiante where CodigoEstudiante =
   ".$_GET["CodigoEstudiante"];
   $Resultado=false;
   try {
   $Resultado= mysqli_query($Conexion, $Consulta);
  }
   catch (Exception $e)
   { $Mensaje="No se pudo consultar el estudiante con código ".$_GET["CodigoEstudiante"];
      //$error=$e->getMessage();
      //print $e->getMessage();
      //print $Resultado;
   } 
   if ($Resultado == false) { $Mensaje="No se pudo consultar el estudiante con código ".$_GET["CodigoEstudiante"];
  }
   else {$Mensaje="Se pudo consultar el estudiante con código ".$_GET["CodigoEstudiante"];}
   $Registro=$Resultado->fetch_assoc();

}
else if (!empty($_POST["CodigoEstudiante"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["ProyectoEspecialidad"])) {
     $CodigoE = $_POST["CodigoEstudiante"];
     $PrimerNombre = $_POST["PrimerNombre"];
     $SegundoNombre = $_POST["SegundoNombre"];
     $PrimerApellido = $_POST["PrimerApellido"];
     $SegundoApellido = $_POST["SegundoApellido"];
     $Curso = $_POST["Curso"];
     $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
     $ProyectoEspecialidad = $_POST["ProyectoEspecialidad"];
     $FechaNacimiento = $_POST["FechaDeNacimiento"];

     $Consulta="UPDATE estudiante SET CodigoEstudiante = '".$CodigoE."', PrimerNombre = '".$PrimerNombre."', SegundoNombre = '".$SegundoNombre."', PrimerApellido = '".$PrimerApellido."', SegundoApellido = '".$SegundoApellido."', Curso = '".$Curso."', CodigoEspecialidad = '".$EspecialidadEstudiante."', CodigoProyecto = '".$ProyectoEspecialidad."', FechaDeNacimiento = '".$FechaNacimiento."' WHERE estudiante.CodigoEstudiante = ".$_POST["CodigoActual"]; 
     
     //echo $Consulta;
     $Resultado=false;
     try {
     $Resultado= mysqli_query($Conexion, $Consulta);
    }
     catch (Exception $e)
     { $Mensaje="No se pudo registrar el estudiante por error en los datos";
        //$error=$e->getMessage();
        
        //print $e->getMessage();
        //print $Resultado;
     } 
     if ($Resultado == false) { $Mensaje="No se pudo actualizar al estudiante";
    }
     else {$Mensaje="El estudiante se actualizo correctamente :D";
      //echo $Consulta;
      header('Location: Estudiantes.php');
   }
    } //Fin del If
    else{
    $Mensaje="<h3>El Código, el Primer Nombre, el Primer Apellido, el Curso, la Especialidad y el Proyecto son campos obligatorios</h3>";
    }
    echo "<h3>".$Mensaje."</h3>"

    
 ?>