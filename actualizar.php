<?php

include "db.php";       
 
$id=$_POST["id"];	
$fecha_reg=$_POST["fecha_registro"];
$evolucion=$_POST["nueva_evolucion"];
  

$sql= "UPDATE `pacientes` SET `fecha_registro`= '$fecha_reg',`evolucion`= CONCAT(`evolucion`,'$evolucion') WHERE
`id`='$id' " ;
$result = mysqli_query($bd, $sql);
header("location: index.php?ok");


  

 

?>