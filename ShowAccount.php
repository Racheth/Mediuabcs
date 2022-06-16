<?php

if (isset($_POST["Account_enter"])) {
    update();
}
    
    include("con_db.php");
    include("Loguearse.php");
    $activo = $_SESSION['activo'];

    $busqueda = $conex->query("SELECT * FROM USUARIOS WHERE IDUSUARIO = (SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo')");

    while ($alumnosFila = $busqueda->fetch_assoc()) {
        $nombre1 = $alumnosFila['NOMBRE'];
        $apellido2 = $alumnosFila['APELLIDO'];
        $correo3 = $alumnosFila['CORREO'];
    }


function update()
{
    include("con_db.php");
    include("Loguearse.php");
    $activo = $_SESSION['activo'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $_SESSION['activo'] = $correo;
    $consulta = "UPDATE USUARIOS SET CORREO= '$correo',CONTRASEÑA='$contraseña',NOMBRE='$nombre',APELLIDO='$apellido' WHERE IDUSUARIO = (SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo')";

    if ($conex->query($consulta)) {
        header("Location: MyAccount.php");
    } else {
        echo "No entraste guapo";
    }
}
// A MIMIR A LAS 10 ACTIVO MANU
