<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');
	
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$domicilio=$_POST['domicilio'];
$dni=$_POST['dni'];
$telefono=$_POST['telefono'];
$fecha_nac=$_POST['fecha_nacimiento'];
$genero=$_POST['genero'];
$fecha_reg=$_POST['fecha_registro'];
$evolucion=$_POST['evolucion'];


mysqli_query($bd, "INSERT INTO pacientes values (DEFAULT,'$nombre','$apellido','$domicilio','$dni','$telefono','$fecha_nac','$genero','$fecha_reg','$evolucion')" );

header("location: index.php?ok");





?>