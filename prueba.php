<?php
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/estilos.css">
    
    <title>Dra. Yanina Nadina Resumi</title>
</head>
<body>
   <!-----------cabecera-->
  <div>
  <header class="enca"> <!---barra-->
    <div class="wrap"> <!---dentro del encabezado-->
        <div class="logos"> <!----titulo-->
            Consultorio Dra. Yanina Resumi 
        </div>
        <nav> <!----botones-->
            <a href="index.php">Inicio</a>
            <a href="mostrar.php">Pacientes</a>
            <a href="">Listas De Pacientes</a>
            <a href="">Informes De Estudios</a>
        </nav>
    </div>
</header>
</div>
   
<!-----------fin cabecera-->



    <div class="container mt-5">
    <h1 class="text-center mb-4">Historia Clinica de Paciente</h1>
    <form action="evoluciones.php" method="POST">
    <?php

// Ejecutar la consulta SQL
$id=$_GET['Id'];
$sql="SELECT * FROM `pacientes` where `Id`= $id ";
$result = mysqli_query($bd, $sql);


// Verificar si se obtuvieron resultados
if (mysqli_num_rows($result) > 0) {
    // Recorrer los resultados y mostrarlos en un formulario
    while ($mostrar = mysqli_fetch_assoc($result)) {
        // Mostrar los datos en un formulario
    ?>  
    <div class="form-group">
    <form method="post" action="#">
  <label for="fecha">Seleccione una fecha:</label>
       <select name="lenguajes" id="lang">
        <option value="fecha"><?php echo $fila['fecha_registro'];?></option>
        <option value="php">PHP</option>
        
      </select>
      <input type="submit" value="Enviar" />
</form>
    </div> 
    <?php } 
    } else {
        echo "No se encontraron datos.";
    }
    
    ?>

    </form>
    </div>
</body>
</html>
