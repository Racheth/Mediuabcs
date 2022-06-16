<?php
include("con_db.php");
include("Loguearse.php");
$error = $_POST['error'];
$activo = $_SESSION['activo'];

$consult = "INSERT INTO REPORTE_ERROR(IDUSUARIOS,DESCRIPCION,FECHA) VALUES ((SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo'),'$error',sysdate())";
      $resultadooo = mysqli_query($conex, $consult);
      echo $resultadooo;
      if ($resultadooo) {

         header("Location: ReportError.php");
      }