<?php 
if (!empty($_POST["CodigoE"]) && !empty($_POST["PrimerNombre"]) && !empty($_POST["PrimerApellido"]) && !empty($_POST["Curso"]) && !empty($_POST["EspecialidadEstudiante"]) && !empty($_POST["ProyectoEspecialidad"])) {
     $CodigoE = $_POST["CodigoE"];
     $PrimerNombre = $_POST["PrimerNombre"];
     $SegundoNombre = $_POST["SegundoNombre"];
     $PrimerApellido = $_POST["PrimerApellido"];
     $SegundoApellido = $_POST["SegundoApellido"];
     $Curso = $_POST["Curso"];
     $EspecialidadEstudiante = $_POST["EspecialidadEstudiante"];
     $ProyectoEspecialidad = $_POST["ProyectoEspecialidad"];
     $FechaNacimiento = $_POST["FechaNacimiento"];

     include("bd.php");      
     $Consulta= " INSERT INTO estudiante (CodigoEstudiante, PrimerNombre, SegundoNombre, PrimerApellido, SegundoApellido, Curso, CodigoEspecialidad, CodigoProyecto, FechaDeNacimiento) VALUES ('".$CodigoE."', '".$PrimerNombre."', '".$SegundoNombre."', '".$PrimerApellido."', '".$SegundoApellido."', '".$Curso."', '".$EspecialidadEstudiante."', '".$ProyectoEspecialidad."', '".$FechaNacimiento."')"; 
     
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
     if ($Resultado == false) { $Mensaje="No se pudo registrar al estudiante";
    }
     else {$Mensaje="Se registro correctamente al estudiante :D";}
    } //Fin del If
    else{
    $Mensaje="<h3>El Código, el Primer Nombre, el Primer Apellido, el Curso, la Especialidad y el Proyecto son campos obligatorios</h3>";
    }
    echo "<h3>".$Mensaje."</h3>"
 ?>