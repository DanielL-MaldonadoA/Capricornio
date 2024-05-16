<?php 
    include("navegacion.php");
    echo "<h1>ACTUALIZAR PROYECTO</h1>";
   include("../controlador/ActualizarProyecto.php"); 
    echo'<form action="ActualizacionProyecto.php" method="post">
        <input type="hidden" id="CodigoActualPRO" name="CodigoActualPRO" value="'.$_GET["CodigoProyecto"].'"><br>
        <label for="CodigoProyecto">Código del Proyecto:</label>
        <input type="number" name="CodigoProyecto" id="CodigoProyecto" value="'.$Registro["CodigoProyecto"].'"><br>
        <label for="NombreProyecto">Nombre del Proyecto:</label>
        <input type="text" name="NombreProyecto" id="NombreProyecto" value="'.$Registro["NombreProyecto"].'"><br>
        <label for="Resumen">Resumen:</label>
        <input type="text" name="Resumen" id="Resumen" value="'.$Registro["Resumen"].'"><br>
        <label for="FechaRegistro">Fecha de Registro:</label>
        <input type="date" name="FechaRegistro" id="FechaRegistro" value="'.$Registro["FechaRegistro"].'"><br>
        <button type="submit">Actualizar Proyecto</button>
    </form>';
    include("Footer.php");
    ?>:
