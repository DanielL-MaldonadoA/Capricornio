<?php
include ("bd.php");

$consulta="select * from estudiante";

$Resultado=false;

try {
    $Resultado= mysqli_query($Conexion, $consulta);
   }
    catch (Exception $e)
    { $Mensaje="No se pudieron registrar los estudiantes";
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($Resultado == false) { $Mensaje="No se pudieron registrar los estudiantes";
       //die($mysqli_error($Conexion));
   }
    else {
        echo '<table border="1">
        <tr>
            <td>Codigo Estudiante</td>
            <td>Primer Nombre</td>
            <td>Segundo Nombre</td>
            <td>Primer Apellido</td>
            <td>Segundo Apellido</td>
            <td>Curso</td>
            <td>Especialidad</td>
            <td>Proyecto</td>
            <td>Fecha De Nacimiento</td>
            <td colspan="2">Acciones</td>
        </tr>';
        while($Registro=$Resultado->fetch_assoc()){
            echo'
            <tr>
                <td>'.$Registro["CodigoEstudiante"].'</td>
                <td>'.$Registro["PrimerNombre"].'</td>
                <td>'.$Registro["SegundoNombre"].'</td>
                <td>'.$Registro["PrimerApellido"].'</td>
                <td>'.$Registro["SegundoApellido"].'</td>
                <td>'.$Registro["Curso"].'</td>
                <td>';
                include("NombreEspecialidad.php");
                echo'</td>
                <td>';
                include("NombreProyecto.php");
                echo';</td>
                <td>'.$Registro["FechaDeNacimiento"].'</td>
                <td><a href="ActualizacionEstudiantes.php?CodigoEstudiante='.$Registro["CodigoEstudiante"].'">Editar</a></td>
                <td><a href="#" onclick = "Preguntar('.$Registro["CodigoEstudiante"].')">Eliminar</a></td>
            </tr>';
        } //Fin del ciclo del listado de especialidades
        echo'</table>';
    }


?>

<script type="text/javascript">
    function Preguntar(CodigoEstudiante)
    {
        if(confirm("¿Estas seguro de eliminar el estudiante con codigo "+CodigoEstudiante+"?"))
        {
            window.location.href = "Estudiantes.php? CodigoEstudiante=" +CodigoEstudiante;
        }
    }

</script>