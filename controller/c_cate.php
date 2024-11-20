<?php
if(isset($_GET['act'])) {
switch ($_GET['act']) {
    case 'cate':
        include_once "view/layout/header.php";
        include_once "/xampp/htdocs/Project1_Group-TechZone/admin/view/page_cate.php";
        include_once "view/layout/footer.php";
        break;

    default:
        break;
}
}else{
    header("Location: ?mod=page&act=home");
}