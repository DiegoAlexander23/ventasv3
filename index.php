<?php
    require './controller/ClienteController.php';
    $controller=new ClienteController();
    $accion=isset($_GET['accion'])?$_GET['accion']:'cargarclientes';
    switch($accion){
        case 'guardarcliente':
            $controller->guardar();
        break;
        case 'cargarclientes':
            $controller->cargar();
        break;
    }
?>