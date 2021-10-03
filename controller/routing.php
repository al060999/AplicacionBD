<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';

switch ($var_getMenu) {
    case "inicio":
        require_once ('./views/bienvenida.php');
        break;
    case "login":
        require_once('./views/login.php');
        break;
    case "acercade":
        require_once('./views/acercade.php');
        break;
    case "alumnos":
include_once './model/alumnos.php';
$sqlAlumnos = alumnos::consultar();
include_once './views/viewalumnos.php';
break;
    default:
        require_once('./views/bienvenida.php');
}

?>
