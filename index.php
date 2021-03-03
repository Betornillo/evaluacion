<?php
include("includes/headerThree.php");
include("config/conexion.php");



$subjectOptions = array();


$query = " SELECT * FROM Colaboradores c JOIN Puestos p ON c.puestoId=p.puestoid";

$result = mysqli_query($db, $query);



while($row = mysqli_fetch_array($result)) {
    $subjectOptions[] = $row['numeroEmp'];
    $subjectId[] = $row['id'];
}

$totalQuestions = mysqli_num_rows($result);
$questionNumber = (int)$totalQuestions + 1;



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php include "config/general.php" ?>

  	<?php include "includes/head.php" ?>
    <title><?= SITE_TITLE ?></title>

  	<style type="text/css"></style>
    <meta charset="utf-8">

  </head>
  <body>
    <?php include "includes/header-unam.php" ?>
    <div class="container" style="margin-top: 20px;">
      <?php include "includes/menu-administrador.php" ?>
        <h3 style="text-align: center; margin-bottom: 25px;">Consulta un empleado</h3>
        <div style="text-align: center; font-weight: bold;">
            <p><?php if(isset($message)) {echo $message;} ?></p>
        </div>
        <form id="indexForm" method="POST" action="views/principal/listaPuestos.php" name="indexForm">
            <input type="hidden" name="userLoggedIn" value="<?php echo $userLoggedIn; ?>">
            <div class="form-group row">
                <label for="subjects" class="col-sm-2 col-form-label">Elige un numero de empleado</label>
                <div class="col-sm-10">
                    <select type="select" class="form-control" id="subject" name="subject">
                        <?php
                         for($i = 0; $i < count($subjectOptions); $i++)
                         {
                            ?>
                            <option value="<?php echo $subjectId[$i]; ?>"><?php echo $subjectOptions[$i]; ?></option>
                            <?php
                         }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" id="submitSubject" name="submitSubject">Ver empleado</button>
                </div>
            </div>
        </form>
        <a href="entrada.php?id=<?=$entrada['id']?>">
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
