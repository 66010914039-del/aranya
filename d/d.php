<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อรัญญา เนื่องคำอินทร์(เกด)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
<div class="container my-5">

    <h1 class="text-center mb-4 text-primary">ฟอร์มรับข้อมูล - อรัญญา เนื่องคำอินทร์(เกด)-ChatGPT</h1>

    <div class="card shadow-lg p-4">
        <form method="post" action="">

            <div class="mb-3">
                <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="height" class="form-label">ส่วนสูง (100-200 ซม.) <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" name="address" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthday" name="birthday">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color w-100" id="color" name="color">
            </div>
            
            <div class="mb-3">
                <label for="major" class="form-label">สาขาวิชา</label>
                <select class="form-select" id="major" name="major">
                    <option value="การบัญชี">การบัญชี</option>
                    <option value="การตลาด">การตลาด</option>
                    <option value="การจัดการ">การจัดการ</option>
                    <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                </select>
            </div>

            <div class="mt-4">
                <button type="submit" name="Submit" class="btn btn-primary me-2"> สมัครสมาชิก</button>
                <button type="reset" class="btn btn-secondary me-2">ยกเลิก</button>
                <button type="button" class="btn btn-info text-white me-2" onClick="window.location='https://www.msu.ac.th/th/';" >Go to msu </button>
                <button type="button" class="btn btn-warning me-2" onMouseOver="alert('จ๊ะเอ๋!');">Hello</button>
                <button type="button" class="btn btn-success" onClick="window.print();">พิมพ์</button>
            </div>

        </form>
    </div> <hr class="my-5">

    <?php
    if (isset ($_POST['Submit'])) {
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $height = $_POST['height'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $color = $_POST['color'];
        $major = $_POST['major'];
        
        // ใช้ Bootstrap Card/Alert สำหรับแสดงผล
        echo '<div class="card border-success">';
        echo '<div class="card-header bg-success text-white">ข้อมูลที่ส่งมาเรียบร้อยแล้ว</div>';
        echo '<div class="card-body">';
        echo "ชื่อ-สกุล: <strong>".$fullname."</strong><br>";
        echo "เบอร์โทร: <strong>".$phone."</strong><br>";
        echo "ส่วนสูง: <strong>".$height." ซม.</strong><br>";
        echo "ที่อยู่: <strong>".$address."</strong><br>";
        echo "วันเดือนปีเกิด: <strong>".$birthday."</strong><br>";
        // แสดงโค้ดสีและแถบสีเล็ก ๆ
        echo "สีที่ชอบ: <strong>".$color."</strong> <div class='d-inline-block border border-dark ms-2' style='background-color:{$color}; width:50px; height:20px;'></div><br>";
        echo "สาขาวิชา: <strong>".$major."</strong><br>";
        echo '</div>';
        echo '</div>';
    }
    ?>

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>