<!DOCTYPE html>
<html>
<head>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    // Lấy dữ liệu JSON từ PHP
    const data = google.visualization.arrayToDataTable(<?php echo json_encode($chartData); ?>);

    // Cài đặt tùy chọn biểu đồ
    const options = {
        title: 'World Wide Wine Production'
    };

    // Vẽ biểu đồ
    const chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
}

</script>
</body>
</html>
