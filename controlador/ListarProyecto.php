<?php
include ("bd.php");

$consulta="select * from proyecto";

$Resultado=false;

try {
    $Resultado= mysqli_query($Conexion, $consulta);
   }
    catch (Exception $e)
    { $Mensaje="No se pudo consultar los proyectos";
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($Resultado == false) { $Mensaje="No se pudo consultar los proyectos";
       //die($mysqli_error($Conexion));
   }
    else {
        echo '<table border="1">
        <tr>
            <td>Codigo del proyecto</td>
            <td>Nombre del proyecto</td>
            <td>Resumen</td>
            <td>Fecha de registro</td>
            <td colspan="2">Acciones</td>
        </tr>';
        while($Registro=$Resultado->fetch_assoc()){
            echo'
            <tr>
                <td>'.$Registro["CodigoProyecto"].'</td>
                <td>'.$Registro["NombreProyecto"].'</td>
                <td>'.$Registro["Resumen"].'</td>
                <td>'.$Registro["FechaRegistro"].'</td>
                <td><a href="ActualizacionProyecto.php?CodigoProyecto='.$Registro["CodigoProyecto"].'">Editar</a></td>
                <td><a href="#" onclick = "Preguntar('.$Registro["CodigoProyecto"].')">Eliminar</a></td>
            </tr>';
        } //Fin del ciclo del listado de especialidades
        echo'</table>';
    }

?>
<script type="text/javascript">
    function Preguntar(CodigoProyecto)
    {
        if(confirm("¿Estas seguro de eliminar el proyecto con codigo "+CodigoProyecto+"?"))
        {
            window.location.href = "proyectos.php? CodigoProyecto=" +CodigoProyecto;
        }
    }

</script>