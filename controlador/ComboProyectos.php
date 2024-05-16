<?php
include("bd.php");

$consultaPro="SELECT * FROM proyecto";

$ResultadoPro=false;

try {
    $ResultadoPro= mysqli_query($Conexion, $consultaPro);
   }
    catch (Exception $e)
    { $Mensaje="No se pudo consultar los proyectos";
       //$error=$e->getMessage();
       print $e->getMessage();
       //print $Resultado;
    } 
    if ($ResultadoPro == false) { $Mensaje="No se pudo consultar los proyectos";
       //die($mysqli_error($Conexion));
   }
    else {
        echo '<select name="ProyectoEspecialidad" id="ProyectoEspecialidad">';
        while($RegistroPro=$ResultadoPro->fetch_assoc()){
            if($Registro["CodigoProyecto"]==$RegistroPro["CodigoProyecto"]) {
                echo '<option value="'.$RegistroPro["CodigoProyecto"].'" selected>'.
                $RegistroPro["NombreProyecto"].'</option>';
            }
            else echo '<option value="'.$RegistroPro["CodigoProyecto"].'">'.$RegistroPro["NombreProyecto"].'</option>';
        } //Fin del ciclo del listado de especialidades
        echo'</select>';
    }



?>