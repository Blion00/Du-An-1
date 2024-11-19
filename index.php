<?php
$baseUrl = "http://localhost/admin";
if (isset($_GET['mod'])) {
switch($_GET['mod']){
    case'page'; 
    include_once 'controller/c_page.php';
    break;
    case 'user';
    include_once 'controller/c_user.php';
    break;
    case 'chart';
    include_once 'controllers/ChartController.php';
    $controller = new ChartController();
    $controller->showChart();
    break;
    default:
    include_once 'controller/c_user.php';
    break;
    }
}else{
    header("Location:?mod=page");
}

