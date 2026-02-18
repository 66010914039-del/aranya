<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ฟอร์มรับข้อมูล - อรัญญา เนื่องคำอินทร์(เกด)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .card { border-radius: 15px; }
    </style>
</head>

<body>
<div class="container my-5">
    <div class="card shadow-lg p-3">
        <div class="card-body">
            <h1 class="card-title text-center mb-4">ฟอร์มรับข้อมูล - อรัญญา</h1>

            <form method="post" action="">
                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ - สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}" placeholder="08XXXXXXXX">
                    <div class="form-text">ต้องเป็นตัวเลข 10 หลัก</div>
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">ส่วนสูง <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
                        <span class="input-group-text">ซม.</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="birthday" class="form-label">วัน / เดือน / ปีเกิด</label>
                    <input type="date" class="form-control" id="birthday" name="birthday">
                </div>

                <div class="mb-3">
                    <label for="color" class="form-label">สีที่ชอบ</label>
                    <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c">
                </div>

                <div class="mb-3">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select class="form-select" id="major" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การเงิน">การเงิน</option>
                    </select>
                </div>

                <div class="d-grid gap-2 d-md-block mt-4 text-center">
                    <button type="submit" name="Submit" class="btn btn-primary">
                        <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <i class="bi bi-x-circle-fill"></i> ยกเลิก
                    </button>
                    <button type="button" class="btn btn-info text-white" onClick="window.location='https://www.msu.ac.th/';">
                        Go to MSU
                    </button>
                    <button type="button" class="btn btn-warning" onclick="alert('จ๊ะเอ๋ตัวเอง!!!');">
                        Hello
                    </button>
                    <button type="button" class="btn btn-success" onClick="window.print();">
                        <i class="bi bi-printer-fill"></i> พิมพ์
                    </button>
                </div>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST['Submit'])) {
        // เชื่อมต่อฐานข้อมูล
        include_once("connectdb.php");

        // รับค่าและตัดช่องว่าง
        $fullname = trim($_POST['fullname']);
        $phone    = trim($_POST['phone']);
        $height   = (int)$_POST['height'];  // แปลงค่า height เป็น integer
        $address  = trim($_POST['address']);
        $birthday = $_POST['birthday'];
        $color    = $_POST['color'];
        $major    = $_POST['major'];

        // ตรวจสอบว่าค่าที่จำเป็นได้รับการป้อนหรือไม่
        if (empty($fullname) || empty($phone) || empty($height)) {
            echo "<script>alert('กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน');</script>";
        } else {
            // เตรียม Query (เช็คชื่อ Table และ Column ใน DB ให้ตรงกันด้วยนะครับ)
            $sql = "INSERT INTO register (r_name, r_phone, r_height, r_address, r_birthday, r_color, r_major) VALUES (?, ?, ?, ?, ?, ?, ?)";
            
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                // ผูกข้อมูลกับ SQL query
                $stmt->bind_param("ssissss", $fullname, $phone, $height, $address, $birthday, $color, $major);

                // ตรวจสอบว่าการบันทึกข้อมูลสำเร็จหรือไม่
                if ($stmt->execute()) {
                    echo "<script>alert('บันทึกข้อมูลสำเร็จ'); window.location.href=window.location.href;</script>";
                } else {
                    echo "<script>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล: " . $stmt->error . "');</script>";
                }
                $stmt->close();
            } else {
                echo "<script>alert('เกิดข้อผิดพลาดในการเตรียม SQL: " . $conn->error . "');</script>";
            }
            $conn->close();
        }
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
