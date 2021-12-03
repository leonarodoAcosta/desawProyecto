<?php
include 'conexion/conexion.php';
  $user = 'root';
  $pass = '';
  $host = 'localhost';

  $conexion = mysqli_connect($host, $user, $pass);

  $nombre = $_POST['nombre'];
  $apellidopa = $_POST['apellidopa'];
  $apellidoma = $_POST['apellidoma'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $sexo = $_POST['sexo'];
  $menu = $_POST['menu'];
  $textarea = $_POST['textarea'];

       $datab = "formulario";
       $db = mysqli_select_db($conexion,$datab);

       $instruccion_SQL = "INSERT INTO formulario (nombre, apellidopa, apellidoma, correo, telefono, sexo, menu, textarea)
       VALUES ('$nombre','$apellidopa','$apellidoma','$correo','$telefono','$sexo','$menu','$textarea')";

       $resultado = mysqli_query($conexion,$instruccion_SQL);

       $consulta = "SELECT * FROM formulario";
       
       $result = mysqli_query($conexion,$consulta);

       include 'formulario.php';

  ?>