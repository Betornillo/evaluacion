<?php
include("../../includes/headerThree.php");
include("../../config/conexion.php");

$activador = $_POST['subject'];

$sql = "SELECT * FROM Puestos p INNER JOIN Colaboradores c ON p.puestoId=c.puestoid WHERE c.id='$activador';";
$publicacion = mysqli_query($db,$sql);

$result = array();

if($publicacion && mysqli_num_rows($publicacion) >= 1){
  $result = mysqli_fetch_assoc($publicacion);
}



var_dump($result);

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include "../../config/general.php" ?>

  	<?php include "../../includes/head.php" ?>
    <title><?= SITE_TITLE ?></title>

  	<style type="text/css"></style>
    <meta charset="utf-8">
  </head>
  <body>
    <form class="" action="https://1994studio.com.mx/proyectoI" method="post">
      <h1>Busqueda de <?=$result['numeroEmp']?></h1>
      <h1>Nombre: <?=$result['nombre']?> <?=$result['apellidoP']?> <?=$result['apellidoM']?></h1>
      <h1>Puesto: <?=$result['nombrePuesto']?></h1>


      <div class="form-group row">
          <div class="col-sm-10">
          <button type="submit" class="btn btn-primary" id="submitSubject" name="submitSubject">Regresar</button>
          </div>
      </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
