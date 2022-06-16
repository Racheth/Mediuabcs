<?php
include("con_db.php");
$tabla = '';
include("Loguearse.php");
$activo = $_SESSION['activo'];
$busqueda = $conex->query("SELECT * FROM HISTORIAL WHERE IDUSUARIOS = (SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo')");

$tabla .= '<table class="table table-info table-hover table-bordered border-dark mt-5">                          
<tr>

    <th scope="col">Medicina</th>
    <th scope="col">Tipo</th>
    <th scope="col">Dosis</th>
    <th scope="col">Fecha</th>
    <th scope="col">Ingerida</th>
</tr>';

while ($alumnosFila = $busqueda->fetch_assoc()) {
    $tabla .= '
       <tr>
    	<td>' . $alumnosFila['NOMBRE_MEDICINA'] . '</td>
    	<td>' . $alumnosFila['TIPO'] . '</td>
    	<td>' . $alumnosFila['DOSIS'] . '</td>
    	<td>' . $alumnosFila['FECHA'] . '</td>
    	<td>' . $alumnosFila['APLICADA'] . '</td>
    	</tr>
       ';
}


$tabla .= '</td></tr></table>';
