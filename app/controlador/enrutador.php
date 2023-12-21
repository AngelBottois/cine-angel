<?php
include './app/controlador/controllerformulario.php';
session_set_cookie_params(0, '');
session_start();
$accion = $_REQUEST['ctl'] ?? 'inicio';
switch($accion){
    case 'inicio':
        include "./app/vista/inicio.php";
        break;
}
?>