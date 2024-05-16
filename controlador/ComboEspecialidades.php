<?php
include("bd.php");

$consultaEsp="SELECT * FROM especialidad";

$ResultadoEsp=false;

try {
    $ResultadoEsp= mysqli_query($Conexion, $consultaEsp);
   }
    catch (Exception $e)
    { $Mensaje="No se pudo consultar las epecialidades";
       //$error=$e->getMessage();
       //print $e->getMessage();
       //print $Resultado;
    } 
    if ($ResultadoEsp == false) { $Mensaje="No se pudo consultar las especialidades";
       //die($mysqli_error($Conexion));
   }
    else {
        echo '<select name="EspecialidadEstudiante" id="EspecialidadEstudiante">';
        while($RegistroEsp=$ResultadoEsp->fetch_assoc()){
            if ($Registro["CodigoEspecialidad"]==$RegistroEsp["CodigoEspecialidad"]) {
                echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'" selected>'.
                $RegistroEsp["NombreEspecialidad"].'</option>';
                
            }
            else {echo '<option value="'.$RegistroEsp["CodigoEspecialidad"].'">'.$RegistroEsp["NombreEspecialidad"].'</option>';}
        } //Fin del ciclo del listado de especialidades
        echo'</select>';
    }



?>