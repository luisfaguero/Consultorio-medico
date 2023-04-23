
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>

    
    <title>Dra. Yanina Nadina Resumi</title>
</head>
<body>
  <!-----------cabecera-->
  <div>
  <header class="enca"> <!---barra-->
    <div class="wrap"> <!---dentro del encabezado-->
        <div class="logos"> <!----titulo-->
            Consultorio Dra. Yanina Nadina Resumi 
        </div>
        <nav> <!----botones-->
            <a href="index.php">Inicio</a>
            <a href="mostrar.php">Pacientes</a>
            <a href="">Lista de Pacientes</a>
            <a href="">Informes de Estudios</a>
        </nav>
    </div>
  </header>
</div><br><br><br>
<!-----------formulario-->
<div class="container mt-5">
    <h1 class="text-center mb-4">Historia Clinica de Paciente</h1>
    <form action="registro.php" method="POST">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" required>
          </div>
        </div>
         <div class="form-group">
            <label for="apellido">Domicilio</label>
            <input type="text" class="form-control" id="domicilio" name="domicilio" required>
         </div>
        
      </div>
      <div class="form-group">
        <label for="dni">Dni</label>
        <input type="dni" class="form-control" id="dni" name="dni" required>
      </div>
      <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" name="telefono" required>
      </div>
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
      </div>
      <div class="form-group">
        <label for="genero">Género</label>
        <select class="form-control" id="genero" name="genero" required>
          <option value="">Seleccionar</option>
          <option value="masculino">Masculino</option>
          <option value="femenino">Femenino</option>
          <option value="otro">Otro</option>
        </select>
      </div>
      <div class="form-group">
        <label for="fecha">Fecha de Evolucion</label>
        <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
      </div>
      <div class="form-group">
        <label for="diagnostico">Evolucion</label>
        <textarea class="form-control" id="evolucion" name="evolucion" rows="10" required></textarea>
      </div>
      

        <div class="form-group text-center">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
      
   
      </div>
    </form>
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
      
      ;
      
} else {
   echo "error no se guardo";
}
?>

                      <!-----------hasta aqui form----------------------->
     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
</html>