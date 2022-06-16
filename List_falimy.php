<?php
include("con_db.php");
$tabla='';
include("Loguearse.php");
$activo = $_SESSION['activo'];
$busqueda=$conex->query("SELECT * FROM FAMILIARES WHERE IDUSUARIOS = (SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo')");

$tabla.='<table class="table table-success table-hover table-bordered border-dark"><tr>
    <th scope="col">Name</th>
    <th scope="col">Last Name</th>
    <th scope="col">Phone number</th>
    <th scope="col">Email</th>
    <th scope="col">Parentesco</th>
 </tr>';

while($alumnosFila=$busqueda->fetch_assoc())
{
	$tabla.='
       <tr>
    	<td>'.$alumnosFila['NOMBRE'].'</td>
    	<td>'.$alumnosFila['APELLIDO'].'</td>
    	<td>'.$alumnosFila['TELEFONO'].'</td>
    	<td>'.$alumnosFila['EMAIL'].'</td>
    	<td>'.$alumnosFila['PARENTESCO'].'</td>
    	</tr>
       ';
}


$tabla.='</td></tr></table>';
?>