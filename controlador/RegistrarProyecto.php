<?php 
if (!empty($_POST["Codigo"]) && !empty($_POST["NombreProyecto"]) && !empty($_POST["Resumen"]) && !empty($_POST["FechaRegistro"])) {
     $Codigo = $_POST["Codigo"];
     $NombreProyecto = $_POST["NombreProyecto"];
     $Resumen = $_POST["Resumen"];
     $FechaRegistro = $_POST["FechaRegistro"];

     include("bd.php");      
     $Consulta= "INSERT INTO `proyecto` (`CodigoProyecto`, `NombreProyecto`, `Resumen`, `FechaRegistro`) VALUES ('".$Codigo."', '".$NombreProyecto."', '".$Resumen."', '".$FechaRegistro."')"; 
     $Resultado=False;

     //print $Consulta;
     try {
     $Resultado= mysqli_query($Conexion, $Consulta);
    }
     catch (Exception $e)
     { $Mensaje="No se pudo registrar el proyecto por error en los datos";
        //$error=$e->getMessage();
        //print $e->getMessage();
        //print $Resultado;
     } 
     if ($Resultado == false) { $Mensaje="No se pudo registrar el proyecto";
    }
     else {$Mensaje="El proyecto se registro correctamente :D";}
     } //Fin del If
     else{
     $Mensaje="<h3>Todos los campos son obligatorios</h3>";
     }
     echo "<h3>".$Mensaje."</h3>"
 ?>