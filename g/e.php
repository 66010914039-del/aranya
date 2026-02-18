<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>อรัญญา เนื่องคำอินทร์(เกด)</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container { width: 90%; margin: auto; }
        .chart-box { width: 48%; float: left; margin: 1%; }
        table { width: 100%; margin-bottom: 20px; border-collapse: collapse; }
        @media (max-width: 700px) { .chart-box { width: 100%; } }
    </style>
</head>

<body>
<div class="container">
    <h1>อรัญญา เนื่องคำอินทร์(เกด)</h1>

    <table border="1">
        <tr>
            <th>ประเทศ</th>
            <th>ยอดขาย</th> 
        </tr>

        <?php
        include_once("connectdb.php");
        $sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country";
        $rs = mysqli_query($conn, $sql);
        
        $countries = [];
        $totals = [];

        while ($data = mysqli_fetch_array($rs)) {
            $countries[] = $data['p_country']; // เก็บชื่อประเทศสำหรับกราฟ
            $totals[] = $data['total'];       // เก็บยอดขายสำหรับกราฟ
        ?>
        <tr>
            <td><?php echo $data['p_country'];?></td>
            <td align="right"><?php echo number_format($data['total'], 2);?></td>
        </tr>
        <?php 
        }
        mysqli_close($conn);
        ?> 
    </table>

    <hr>

    <div class="chart-box">
        <canvas id="barChart"></canvas>
    </div>
    <div class="chart-box">
        <canvas id="pieChart"></canvas>
    </div>
</div>

<script>
// เตรียมข้อมูลจาก PHP สำหรับ JavaScript
const labels = <?php echo json_encode($countries); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

const commonOptions = {
    responsive: true,
    plugins: {
        legend: { display: true, position: 'bottom' }
    }
};

// สร้าง Bar Chart
new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขายรายประเทศ',
            data: dataValues,
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'blue',
            borderWidth: 1
        }]
    },
    options: commonOptions
});

// สร้าง Pie Chart
new Chart(document.getElementById('pieChart'), {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
        }]
    },
    options: commonOptions
});
</script>
</body>
</html>