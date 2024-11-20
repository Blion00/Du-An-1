<?php
if(isset($_GET['act'])) {
switch ($_GET['act']) {
    case 'home':
        include_once "view/layout/header.php";
        include_once "view/page_home.php";
        include_once "view/layout/footer.php";
        break;
    // case 'chart':
    //     include_once "view/layout/header.php";
    //     include_once "./admin/view/page_chart.php";
    //     include_once "view/layout/footer.php";
    //     break;
    case 'about':

        break;
    default:
        # code...
        break;
}
}else{
    header("Location: ?mod=page&act=home");
}