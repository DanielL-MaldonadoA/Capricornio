<?php
include ("bd.php");

$consulta="select * from especialidad";

$Resultado=false;

try {
    $Resultado= mysqli_query($Conexion, $consulta);
   }
    catch (Exception $e)
    { $Mensaje="No se pudo consultar la especialidad";
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($Resultado == false) { $Mensaje="No se pudo consultar la especialidad";
       //die($mysqli_error($Conexion));
   }
    else {
        echo '<table border="1">
        <tr>
            <td>Codigo Especialidad</td>
            <td>Nombre Especialidad</td>
            <td colspan="2">Acciones</td>        
        </tr>';
        while($Registro=$Resultado->fetch_assoc()){
            echo'
            <tr>
                <td>'.$Registro["CodigoEspecialidad"].'</td>
                <td>'.$Registro["NombreEspecialidad"].'</td>
                <td><a href="ActualizacionEspecialidad.php?CodigoEspecialidad='.$Registro["CodigoEspecialidad"].'">Editar</a></td>
                <td><a href="#" onclick = "Preguntar('.$Registro["CodigoEspecialidad"].')">Eliminar</a></td>
            </tr>';
        } //Fin del ciclo del listado de especialidades
        echo'</table>';
    }

    
?>

<script type="text/javascript">
    function Preguntar(CodigoEspecialidad)
    {
        if(confirm("¿Estas seguro de eliminar la especialidad con codigo "+CodigoEspecialidad+"?"))
        {
            window.location.href = "Especialidades.php? CodigoEspecialidad=" +CodigoEspecialidad;
        }
    }

</script>