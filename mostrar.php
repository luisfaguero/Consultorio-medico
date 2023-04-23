
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
</header><br<br><br><br>

<!------------mmostrar------>
<div class="container mt-5">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

<?php

    $sql="SELECT * FROM pacientes";
    $result = mysqli_query($bd, $sql);

    while($mostrar = mysqli_fetch_array($result)){

   
?>

    <tr>
      <td><?php echo $mostrar['id'] ?></td>
       <td><?php echo $mostrar['nombre'] ?></td>
       <td><?php echo $mostrar['apellido'] ?></td>
       

       <td>
    
        <a href="modificar.php?Id=<?php echo $mostrar['id'];?>"><input class="btn btn-primary" type="submit" value="Ver Historial" name="btnModificar"></a>
</td>
           
        </form>
        
       </td>

 
       <td> 
       <a href="eliminar.php?Id=<?php echo $mostrar['id'];?>"><input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"></a>
       </td>
  

    </tr>

    <?php
 }
    ?>
  </tbody>
      
</table>
</div>


</body>

 <?php 
    
          if (isset($_GET['ok'])) {
            echo "<h3>Datos Eliminados Correctamente!!</h3>";
       }
       ?>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>   
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>