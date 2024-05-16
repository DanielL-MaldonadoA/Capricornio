<?php 
    include("navegacion.php");
    echo "<h1>ACTUALIZAR ESPECIALIDAD</h1>";
   include("../controlador/ActualizarEspecialidad.php"); 
    echo '<form action="ActualizacionEspecialidad.php" method="post">
        <input type="hidden" id="CodigoActualE" name="CodigoActualE" value="'.$_GET["CodigoEspecialidad"].'"><br>
        <label for="CodigoEspecialidad">Código de la Especialidad:</label>
        <input type="number" name="CodigoEspecialidad" id="CodigoEspecialidad" value="'.$Registro["CodigoEspecialidad"].'"><br>
        <label for="NombreEspecialidad">Nombre de la Especialidad:</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad" value="'.$Registro["NombreEspecialidad"].'"><br>
        <button type="submit">Actualizar Especialidad</button>
        
    </form>';
    include("Footer.php");
    ?>:
