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
         <label for="nombre">Registro</label>
         <input type="text" name="id" id="id" value="<?php echo $mostrar['id'] ?>">
    </div> 
    
    <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="mod_nombre" value="<?php echo $mostrar['nombre'] ?> " required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="mod_apellido" value="<?php echo $mostrar['apellido'] ?> "required>
            </div>
          </div>
           <div class="form-group">
              <label for="apellido">Domicilio</label>
              <input type="text" class="form-control" id="domicilio" name="mod_domicilio" value="<?php echo $mostrar['domicilio'] ?> " required>
           </div>
          
        </div>
        <div class="form-group">
          <label for="email">Dni</label>
          <input type="dni" class="form-control" id="dni" name="mod_dni" value="<?php echo $mostrar['dni'] ?> "    required>
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="tel" class="form-control" id="telefono" name="mod_telefono" value="<?php echo $mostrar['telefono'] ?> "required>
        </div>
        <div class="form-group">
          <label for="fecha_nacimiento">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="fecha_nacimiento" name="mod_fecha_nacimiento" value="<?php echo $mostrar['fecha_nac'] ?>" required>
        </div>
        <div class="form-group">
          <label for="genero">Género</label>
          <select class="form-control" id="genero" name="mod_genero" value =" " required>
            <option value="<?php echo $mostrar['genero'] ?>">seleccionar genero</option>
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
        </div>
        <div class="form-group text-center" method="post">
          <label for="fecha">  </label>
        <a href="evoluciones.php?Id=<?php echo $mostrar['id'];?>">  <input class="btn btn-primary" type="submit" name="btnevolucion" value="Evolucion"></a>
        </div>
        
  
          
       
       
        <?php
    }
} else {
    echo "No se encontraron datos.";
}

?> 

   
    </div>

      <?php 
    if (isset($_GET['ok'])){
          
      $message = "Yani , El registro fue Guardado con Exito!";
      echo "<script>
          Swal.fire({
              title: 'Correcto!',
              text: '$message',
              icon: 'info',
              confirmButtonText: 'OK'
          });
      </script>";
      
    };
  ?>  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>