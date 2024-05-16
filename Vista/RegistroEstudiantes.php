
<?php 
    include("navegacion.php");
    echo "<h1>REGISTRO ESTUDIANTE</h1>";
    include("../controlador/RegistrarEstudiante.php");

    echo '<form action="RegistroEstudiantes.php" method="post">
        <label for="CodigoE">Código del Estudiante:</label>
        <input type="number" name="CodigoE" id="CodigoE"><br>
        <label for="PrimerNombre">Primer Nombre:</label>
        <input type="text" name="PrimerNombre" id="PrimerNombre"><br>
        <label for="SegundoNombre">Segundo Nombre:</label>
        <input type="text" name="SegundoNombre" id="SegundoNombre"><br>
        <label for="PrimerApellido">Primer Apellido:</label>
        <input type="text" name="PrimerApellido" id="PrimerApellido"><br>
        <label for="SegundoApellido">Segundo Apellido:</label>
        <input type="text" name="SegundoApellido" id="SegundoApellido"><br>
        <label for="Curso">Curso:</label>
        <input type="number" name="Curso" id="Curso"><br>
        <label for="EspecialidadEstudiante">Especialidad:</label>';
        include("../controlador/ComboEspecialidades.php");
        echo'<br>
        <label for="ProyectoEspecialidad">ProyectoEspecialidad:</label>'; 
        include("../controlador/ComboProyectos.php"); 
        echo'<br>         
        <label for="FechaNacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="FechaNacimiento" id="FechaNacimiento"><br>
        <button type="submit">Registrar Estudiante</button>
    </form>';
    include("Footer.php");
    ?>: