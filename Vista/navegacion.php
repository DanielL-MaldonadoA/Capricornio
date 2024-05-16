<?php
echo '


<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="/MALDONADO_DANIEL/CSS/estilo.css">
</head>
<body>

<ul>
  <li><a href="/MALDONADO_DANIEL/#home">INICIO</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ESTUDIANTE</a>
    <div class="dropdown-content">
      <a href="/MALDONADO_DANIEL/Vista/Estudiantes.php">LISTAR ESTUDIANTE</a>
      <a href="/MALDONADO_DANIEL/Vista/RegistroEstudiantes.php">REGISTRAR ESTUDIANTE</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ESPECIALIDAD</a>
    <div class="dropdown-content">
      <a href="/MALDONADO_DANIEL/Vista/Especialidades.php">LISTAR ESPECIALIDAD</a>
      <a href="/MALDONADO_DANIEL/Vista/RegistroEspecialidades.php">REGISTRAR ESPECIALIDAD</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PROYECTO</a>
    <div class="dropdown-content">
      <a href="/MALDONADO_DANIEL/Vista/proyectos.php">LISTAR PROYECTO</a>
      <a href="/MALDONADO_DANIEL/Vista/RegistroProyectos.php">REGISTRAR PROYECTO</a>
    </div>
  </li>
</ul>';

?>
