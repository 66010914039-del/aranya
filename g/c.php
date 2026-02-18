<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบจัดการข้อมูลสินค้า - อรัญญา</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f8f9fa; }
        .card { border: none; box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075); }
        .table-img { width: 50px; height: 50px; object-fit: cover; border-radius: 5px; }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="card">
        <div class="card-header bg-primary text-white py-3">
            <h3 class="mb-0 text-center">อรัญญา เนื่องคำอินทร์ (เกด)</h3>
        </div>
        <div class="card-body">
            
            <form method="post" action="" class="row g-3 mb-4">
                <div class="col-auto">
                    <label class="col-form-label">ค้นหาข้อมูล:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="a" class="form-control" placeholder="ชื่อสินค้า / ประเภท / ประเทศ" autofocus value="<?= @$_POST['a']; ?>">
                </div>
                <div class="col-auto">
                    <button type="submit" name="Submit" class="btn btn-primary px-4">ค้นหา</button>
                </div>
            </form>

            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-hover align-middle" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>Order ID</th>
                            <th>รูปภาพ</th>
                            <th>ชื่อสินค้า</th>
                            <th>ประเภทสินค้า</th>
                            <th>วันที่</th>
                            <th>ประเทศ</th>
                            <th class="text-end">จำนวนเงิน</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("connectdb.php");
                        @$kw = $_POST['a'];
                        $sql = "SELECT * FROM popsupermarket WHERE p_country LIKE '%{$kw}%' OR p_product_name LIKE '%{$kw}%' OR p_category LIKE '%{$kw}%'";
                        $rs = mysqli_query($conn, $sql);
                        $total = 0;
                        
                        while ($data = mysqli_fetch_array($rs)) {
                            $total += $data['p_amount'];
                        ?>
                        <tr>
                            <td><?= $data['p_order_id']; ?></td>
                            <td>
                                <img src="images/<?= $data['p_product_name']; ?>.jpg" 
                                     class="table-img" 
                                     onerror="this.src='https://via.placeholder.com/50?text=No+Img'">
                            </td>
                            <td><strong><?= $data['p_product_name']; ?></strong></td>
                            <td><span class="badge bg-info text-dark"><?= $data['p_category']; ?></span></td>
                            <td><?= date('d/m/Y', strtotime($data['p_date'])); ?></td>
                            <td><?= $data['p_country']; ?></td>
                            <td class="text-end text-primary fw-bold"><?= number_format($data['p_amount'], 0); ?></td>
                        </tr>
                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <th colspan="6" class="text-end">ยอดรวมทั้งสิ้น:</th>
                            <th class="text-end text-danger h5"><?= number_format($total, 0); ?></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#myTable').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/th.json" // เมนูภาษาไทย
        },
        "pageLength": 10,
        "order": [[ 0, "desc" ]] // เรียงจาก Order ID ล่าสุด
    });
});
</script>

</body>
</html>