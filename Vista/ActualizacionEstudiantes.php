<?php 
    include("navegacion.php");
    echo "<h1>ACTUALIZAR ESTUDIANTE</h1>";
    include("../controlador/ActualizarEstudiante.php"); 
    echo' <form action="ActualizacionEstudiantes.php" method="post">
        <input type="hidden" id="CodigoActual" name="CodigoActual" value="'.$_GET["CodigoEstudiante"].'"><br>
        <label for="CodigoEstudiante">Código del Estudiante:</label>
        <input type="number" name="CodigoEstudiante" id="CodigoEstudiante" value="'.$Registro["CodigoEstudiante"].'"><br>
        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre" value="'.$Registro["PrimerNombre"].'">><br>
        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre" value="'.$Registro["SegundoNombre"].'">><br>
        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido" value="'.$Registro["PrimerApellido"].'">><br>
        <label for="SegundoApellido">Segundo Apellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido" value="'.$Registro["SegundoApellido"].'">><br>
        <label for="Curso">Curso:</label>
        <input type="number" name="Curso" id="Curso" value="'.$Registro["Curso"].'">><br>
        <label for="EspecialidadEstudiante">Especialidad:</label>';
         include("../controlador/ComboEspecialidades.php");
         echo '
        <br>
        <label for="ProyectoEspecialidad">ProyectoEspecialidad:</label>';   
         include("../controlador/ComboProyectos.php");
         echo '
         <br> 
        <label for="FechaDeNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="FechaDeNacimiento" id="FechaDeNacimiento" value="'.$Registro["FechaDeNacimiento"].'">><br>
        <button type="submit">Actualizar Estudiante</button>
    </form>';
    include("Footer.php");
    ?>:
