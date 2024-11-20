<div id="myChart" style="width:100%; max-width:1000px; height:900px;"></div>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  ['Khách hàng',54.8],
  ['Đơn Hàng',48.6],
  ['Số lượng sản phẩm',44.4],
  ['USA',23.9],
  ['Argentina',14.5]
]);

const options = {
  title:'Bảng Thống Kê',
  is3D:true
};

const chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

<!-- <script>
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

</script> -->