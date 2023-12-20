<?php
session_set_cookie_params(0, '');
session_start();
$accion = $_REQUEST['ctl'] ?? 'inicio';
switch($accion){
    case 'inicio':
        include "./assets/templates/inicio.php";
        break;
    case 'login':
        include "./assets/templates/login.php";
        break;
    case 'registrar':
        include "./assets/templates/registro.php";
        break;
}
?>