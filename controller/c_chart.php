<?php
// controllers/ChartController.php
// require_once 'models/ChartModel.php';

class ChartController {
    public function showChart() {
        $model = new ChartModel();
        $chartData = $model->getChartData();

        // Gửi dữ liệu đến view
        require 'views/page_chart.php';
    }
} ?>
<?php
if(isset($_GET['act'])) {
switch ($_GET['act']) {
    case 'chart':
        include_once 'view/layout/header.php';
        include_once '/xampp/htdocs/Project1_Group-TechZone/admin/view/page_chart.php';
        include_once 'view/layout/footer.php';
        break;
    case 'about':

        break;
    default:
        # code...
        break;
}
}else{
    header("Location: ?mod=page&act=home");
}