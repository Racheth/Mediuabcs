<?php
include("con_db.php");
$tabla = '';
include("Loguearse.php");
$activo = $_SESSION['activo'];
$busqueda = $conex->query("SELECT * FROM ALARMA_RECORDATORIO WHERE IDUSUARIOS = (SELECT IDUSUARIO FROM USUARIOS WHERE CORREO = '$activo')");


while ($alumnosFila = $busqueda->fetch_assoc()) {
    if ($alumnosFila['PRIMERA_DOSIS'] != "null") {
        $tabla .= "
     <a href=\"#\" class=\"list-group-item list-group-item-action align-items-a\" aria-current=\"true\">
    <div class=\"d-flex w-100 justify-content-between align-items-center\">
        <h5 class=\"mb-1\"> $alumnosFila[MEDICAMENTO]</h5>
        <button type=\"submit\" class=\"btn btn-primary\">Tomar </button>
        <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
    </div>
    <p class=\"mb-1\">Hora de consumo : $alumnosFila[PRIMERA_DOSIS] </p>
    <p class=\"mb-1\">Dosis : $alumnosFila[DOSIS]</p>
    <small>Tipos : $alumnosFila[TIPO]</small></a>";
    }
    if ($alumnosFila['SEGUNDA_DOSIS'] != "null") {
        $tabla .= "
        <a href=\"#\" class=\"list-group-item list-group-item-action align-items-a\" aria-current=\"true\">
       <div class=\"d-flex w-100 justify-content-between align-items-center\">
           <h5 class=\"mb-1\"> $alumnosFila[MEDICAMENTO]</h5>
           <button type=\"submit\" class=\"btn btn-primary\">Tomar </button>
           <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
       </div>
       <p class=\"mb-1\">Hora de consumo : $alumnosFila[SEGUNDA_DOSIS] </p>
       <p class=\"mb-1\">Dosis : $alumnosFila[DOSIS]</p>
       <small>Tipos : $alumnosFila[TIPO]</small></a>";
    }
    if ($alumnosFila['TERCERA_DOSIS'] != "null") {
        $tabla .= "
        <a href=\"#\" class=\"list-group-item list-group-item-action align-items-a\" aria-current=\"true\">
       <div class=\"d-flex w-100 justify-content-between align-items-center\">
           <h5 class=\"mb-1\"> $alumnosFila[MEDICAMENTO]</h5>
           <button type=\"submit\" class=\"btn btn-primary\">Tomar </button>
           <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
       </div>
       <p class=\"mb-1\">Hora de consumo : $alumnosFila[TERCERA_DOSIS] </p>
       <p class=\"mb-1\">Dosis : $alumnosFila[DOSIS]</p>
       <small>Tipos : $alumnosFila[TIPO]</small></a>";
    }
    if ($alumnosFila['CUARTA_DOSIS'] != "null") {
        $tabla .= "
        <a href=\"#\" class=\"list-group-item list-group-item-action align-items-a\" aria-current=\"true\">
       <div class=\"d-flex w-100 justify-content-between align-items-center\">
           <h5 class=\"mb-1\"> $alumnosFila[MEDICAMENTO]</h5>
           <button type=\"submit\" class=\"btn btn-primary\">Tomar </button>
           <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
       </div>
       <p class=\"mb-1\">Hora de consumo : $alumnosFila[CUARTA_DOSIS] </p>
       <p class=\"mb-1\">Dosis : $alumnosFila[DOSIS]</p>
       <small>Tipos : $alumnosFila[TIPO]</small></a>";
    }
    if ($alumnosFila['FIVE_DOSIS'] != "null") {
        $tabla .= "
        <a href=\"#\" class=\"list-group-item list-group-item-action align-items-a\" aria-current=\"true\">
       <div class=\"d-flex w-100 justify-content-between align-items-center\">
           <h5 class=\"mb-1\"> $alumnosFila[MEDICAMENTO]</h5>
           <button type=\"submit\" class=\"btn btn-primary\">Tomar </button>
           <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
       </div>
       <p class=\"mb-1\">Hora de consumo : $alumnosFila[FIVE_DOSIS] </p>
       <p class=\"mb-1\">Dosis : $alumnosFila[DOSIS]</p>
       <small>Tipos : $alumnosFila[TIPO]</small></a>";
    }
    if ($alumnosFila['SEXTA_DOSIS'] != "null") {
        $tabla .= "
        <a href=\"#\" class=\"list-group-item list-group-item-action align-items-a\" aria-current=\"true\">
       <div class=\"d-flex w-100 justify-content-between align-items-center\">
           <h5 class=\"mb-1\"> $alumnosFila[MEDICAMENTO]</h5>
           <button type=\"submit\" class=\"btn btn-primary\">Tomar </button>
           <button type=\"submit\" class=\"btn btn-danger\">Cancelar</button>
       </div>
       <p class=\"mb-1\">Hora de consumo : $alumnosFila[SEXTA_DOSIS] </p>
       <p class=\"mb-1\">Dosis : $alumnosFila[DOSIS]</p>
       <small>Tipos : $alumnosFila[TIPO]</small></a>";
    }
}
