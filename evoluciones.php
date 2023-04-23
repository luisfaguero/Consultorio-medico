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
</head>
<body>
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
    </div> <br />

</header>
<br />
<div class="container mt-5"><br> 
    <h1 class="text-center mb-4" >Evolucion del Paciente</h1>


</div>

<?php
$id=$_GET["Id"];

$sql = "SELECT `fecha_registro` FROM `pacientes`where `id`= '$id' ";
$resultado = mysqli_query($bd, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
  
  
  
?>

<form action="actualizar.php" method="POST">    
     <div>
        <div>
        <div method="#" action="#">
  <label for="fecha">Seleccione una fecha:</label>
       <select name="lenguajes" id="lang">
        <option name="fecha_eva_ant" value="#"><?php echo $fila['fecha_registro'];?></option>
        
      </select>
      <input type="submit" value="mostrar" />
</div>

<?php } ?>
        </div>
     </div>

     <div>
      <?php
      
      $sql3="SELECT `evolucion` FROM `pacientes` where `id`='$id' ";
      $resultado2 = mysqli_query($bd, $sql3);

        while ($fila2 = mysqli_fetch_assoc($resultado2)) {
      
      ?>  
  <div class="form-group">
         
         <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
    </div> 
      <div class="form-group" method="POST" Action="actualizar.php">
        <label for="fecha">Nueva Fecha de Evolucion</label>
        <input type="date" class="form-control" id="fecha_registro" name="fecha_registro" required>
      </div>
      
      <div class="row" >
      <div class="col">
      <label method="POST">Evolucion   </label>  
      <textarea class="form-control" id="evolucion" name="nueva_evolucion" rows="10" required></textarea>
      </div>
       <div class="col">
    <label>Evoluciones anteriores</label>
  <textarea class="form-control " id="evoluciones_ant" name="evoluciones_ant" rows="10" readonly 
  value="<?php echo $fila2["evolucion"]?>"><?php echo $fila2["evolucion"]?></textarea>
  </div>
</div>
      </div> 
        </div>
     
     <div class="form-group text-center">
          <a href="actualizar.php?Id=<?php $id ?>"><input class="btn btn-primary" type="submit" value="actualizar" name="btnActualizar"></a>
          
        </div>
    <?php } ?> 
        </form>
  </body>
<?php 
    
          if (isset($_GET['ok'])) {
            echo "<h3>Datos modificados Correctamente!!</h3>";
       }
       ?>
</html>