
<?php

SESSION_START();
include("con_db.php");

$_SESSION['activo'];
if (isset($_POST['login_enter'])) {
  loguearse();
   // mostrar_relatives();
}
if (isset($_POST['register_enter'])) {
   register();
}
if (isset($_POST['relative_enter'])) {
   registerfamily();
}
if (isset($_POST['Medicina_enter'])) {
   medicina();
}



function loguearse()
{

   $inc = include("con_db.php");
   if ($inc) {
      $correo = $_POST['uname'];
      $_SESSION['activo'] = $correo;
      $pass = $_POST['psw'];
      $consulta = "SELECT * FROM USUARIOS WHERE CORREO = '$correo' and CONTRASEÑA= '$pass'";
      $resultado = mysqli_query($conex, $consulta);
      $filas = mysqli_num_rows($resultado);
      if ($filas) {

         header("Location: Index.php");
      } else {
         echo "No entraste guapo";
      }
   }
}
function register()
{
   include("con_db.php");
   $password_re = $_POST['password_repit'];
   if ($_POST['password_one'] === $password_re) {
      if (
         strlen($_POST['password_one']) >= 1 && strlen($_POST['password_repit']) >= 1 && strlen($_POST['correo_electric'])
         >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['apellido'])
      ) {
         $nombre = $_POST['name'];
         $apellido = $_POST['apellido'];
         $correo_elec = $_POST['correo_electric'];
         $password_one = $_POST['password_one'];

         $consultaa = "INSERT INTO usuarios(CORREO, CONTRASEÑA,NOMBRE, APELLIDO) VALUES ('$correo_elec','$password_one','$nombre','$apellido')";
         $resultadoo = mysqli_query($conex, $consultaa);
         if ($resultadoo) {
            header("Location: Login.php");
         }
      }
   } else {
      echo "no se metiio";
   }
}

function registerfamily()
{
   include("con_db.php");
   $activo = $_SESSION['activo'];
   if (
      strlen($_POST['namef']) >= 1 && strlen($_POST['apellidof']) >= 1 && strlen($_POST['telefonof'])
      >= 1 && strlen($_POST['correof']) >= 1 && strlen($_POST['parentesco'])
   ) {
      $nombref = $_POST['namef'];
      $apellidof = $_POST['apellidof'];
      $telefonof = $_POST['telefonof'];
      $correo_elecf = $_POST['correof'];
      $parentescof = $_POST['parentesco'];
      $consult = "INSERT INTO FAMILIARES(IDUSUARIOS,NOMBRE, APELLIDO,TELEFONO, EMAIL,PARENTESCO) VALUES ((SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo'),'$nombref','$apellidof','$telefonof','$correo_elecf','$parentescof')";
      $resultadooo = mysqli_query($conex, $consult);
      echo $resultadooo;
      if ($resultadooo) {

         header("Location: Relatives.php");
      }
   }
}


function medicina()
{
   $conn = include("con_db.php");
   $medicamento = $_POST['medicamento'];
   $forma = $_POST['forma'];
   $frecuencia = $_POST['frecuencia'];

   $activo = $_SESSION['activo'];
   if ($forma == "Pastilla") {
      $dosis = $_POST['dosis'];
      $unidad = $_POST['Pastilla'];
      $refil = $_POST['refil'];
      $necesario = $_POST['necesario'];
   }
   if ($forma == "Solución") {
      $dosis = $_POST['dosis'];
      $unidad = $_POST['Solución'];
      $refil = $_POST['refil'];
      $necesario = $_POST['necesario'];
   }
   if ($forma == "Inyección") {
      $dosis = $_POST['dosis'];
      $unidad = $_POST['Inyección'];
      $refil = $_POST['refil'];
      $necesario = $_POST['necesario'];
   }
   if ($forma == "Polvo") {
      $dosis = $_POST['dosis'];
      $unidad = $_POST['Polvo'];
      $refil = $_POST['refil'];
      $necesario = $_POST['necesario'];
   }
   if ($forma == "Gotas") {
      $dosis = $_POST['dosis'];
      $unidad = $_POST['Gotas'];
      $refil = $_POST['refil'];
      $necesario = $_POST['necesario'];
   }
   if ($forma == "Inhalador") {
      $dosis = $_POST['dosis'];
      $unidad = $_POST['Inhalador'];
      $refil = $_POST['refil'];
      $necesario = $_POST['necesario'];
   }
   if ($forma == "Otros") {
      $dosis = $_POST['dosis'];
      $unidad = $_POST['Otros'];
      $refil = $_POST['refil'];
      $necesario = $_POST['necesario'];
   }
   if ($frecuencia == "Una vez al día") {
      $one = $_POST['one'];
      $two = 'null';
      $three = 'null';
      $four = 'null';
      $five = 'null';
      $six = 'null';
   }
   if ($frecuencia == "Dos veces al día") {
      $one = $_POST['one'];
      $two = $_POST['two'];
      $three = 'null';
      $four = 'null';
      $five = 'null';
      $six = 'null';
   }
   if ($frecuencia == "3 veces al día") {
      $one = $_POST['one'];
      $two = $_POST['two'];
      $three = $_POST['three'];
      $four = 'null';
      $five = 'null';
      $six = 'null';
   }
   if ($frecuencia == "4 veces al día") {
      $one = $_POST['one'];
      $two = $_POST['two'];
      $three = $_POST['three'];
      $four = $_POST['four'];
      $five = 'null';
      $six = 'null';
   }
   if ($frecuencia == "6 veces al día") {
      $one = $_POST['one'];
      $two = $_POST['two'];
      $three = $_POST['three'];
      $four = $_POST['four'];
      $five = $_POST['five'];
      $six = $_POST['six'];
   }
   $dosis_completa = $dosis." ".$unidad;
   if($conn){

      $consult = "INSERT INTO ALARMA_RECORDATORIO(IDUSUARIOS, IDTIPOS, MEDICAMENTO,TIPO,DOSIS,NECESIDAD_DIARIA, FRECUENCIA_DIA,PRIMERA_DOSIS,SEGUNDA_DOSIS,TERCERA_DOSIS,CUARTA_DOSIS,FIVE_DOSIS,SEXTA_DOSIS,RECORDATORIO_REFILL) VALUES ((SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo'),(SELECT IDTIPO FROM TIPOS WHERE TIPOS = '$forma'),'$medicamento','$forma','$dosis_completa','$necesario','$frecuencia','$one ','$two','$three','$four','$five','$six','$refil')";
      $resultadooo = mysqli_query($conex, $consult);
      echo $resultadooo;
      if ($resultadooo) {

         header("Location: Index.php");
      }else{
         echo "no entraste idiota";
      }
   }
   
}


