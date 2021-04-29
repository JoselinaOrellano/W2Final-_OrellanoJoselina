<?php
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    require_once 'controllers/encuesta.controller.php';

    require_once 'controllers/.php';

    require_once 'controllers/.php';
    
    require_once 'controllers/.php';
    
    $action= $_REQUEST['action'];
    $urlAction= explode('/',$action);


    switch ($urlAction[0]){
        case 'nuevaEncuesta': {
           $ctrl= new controladorEncuesta();
           $ctrl->crearEncuesta();
        } break;

        case 'cargarEncuesta': {
            $ctl = new controladorEncuesta();
            $ctrl->cargarEncuesta();
        }