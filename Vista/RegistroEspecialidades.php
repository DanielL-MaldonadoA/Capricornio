
<?php 
    include("navegacion.php");
    echo "<h1>REGISTRO ESPECIALIDAD</h1>";
    include("../controlador/RegistrarEstudiante.php");
   include("../controlador/RegistrarEspecialidad.php");
    echo' <form action="RegistroEspecialidades.php" method="post">
        <label for="Codigo">Código Especialidad:</label>
        <input type="number" name="Codigo" id="Codigo"><br>
        <label for="Especialidad">Nombre de la Especialidad:</label>
        <input type="text" name="NombreEspecialidad" id="NombreEspecialidad"><br>
        <button type="submit">Registrar Especialidad</button>
    </form>';
    include("Footer.php");
    ?>:
