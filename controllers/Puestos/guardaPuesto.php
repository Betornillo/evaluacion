<?php

if(isset($_POST["submit"])){
  require_once("../../config/conexion.php");

  $nombre = isset($_POST["nombre"]) ? mysqli_real_escape_string($db,$_POST["nombre"]) : false;


  $errores = array();
  if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
    $nombre_validado = true;
  } else {
    $nombre_validado = false;
    $errores['nombre'] = "Mal nombre";
  }


  $guardar_usuario = false;
  $message = "Error en los datos";
  if(count($errores) == 0){
    $guardar_usuario = true;

    $sql = "INSERT INTO Puestos VALUES(NULL,'$nombre');";
    $guardar = mysqli_query($db,$sql);

    if($guardar){
      $_SESSION['completado'] = "Te has registrado con éxito";

    } else {
      $_SESSION['errores']['generales'] = "Fallo el guardado";
    }


  } else{
    $_SESSION['errores'] = $errores;

  }

}
header('Location: https://1994studio.com.mx/proyectoI/index.php');
exit();
