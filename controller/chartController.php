<?php
// controllers/ChartController.php
require_once 'models/ChartModel.php';

class ChartController {
    public function showChart() {
        $model = new ChartModel();
        $chartData = $model->getChartData();

        // Gửi dữ liệu đến view
        require 'views/page_chart.php';
    }
}
