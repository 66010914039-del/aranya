<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ใบสมัครงาน - บริษัท อรัญญา จำกัด</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            background-color: white;
            margin-bottom: 50px;
        }
        .form-header {
            background-color: #343a40;
            color: white;
            padding: 20px 25px;
            border-radius: 8px 8px 0 0;
            margin-bottom: 0;
        }
        .required-star {
            color: #ffc107; 
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="form-container mx-auto" style="max-width: 850px;">
        
        <div class="form-header text-center">
            <h3 class="fw-bold mb-1 text-white">ใบสมัครงาน</h3>
            <p class="mb-0">บริษัท อรัญญา จำกัด</p>
            <h2 class="fw-bold mb-1 text-white"> อรัญญา  เนื่องคำอินทร์</h2>
        </div>

        <div class="p-4 p-md-5">
            <form method="post" action="" enctype="multipart/form-data" class="needs-validation" novalidate>
                
                <div class="mb-4">
                    <label for="position" class="form-label fw-semibold">ตำแหน่งที่ต้องการสมัคร <span class="required-star">*</span></label>
                    <select class="form-select" id="position" name="position" required>
                        <option value="" selected disabled>-- กรุณาเลือกตำแหน่งที่สนใจ --</option>
                        <option value="หัวหน้าทีมพัฒนาซอฟต์แวร์">หัวหน้าทีมพัฒนาซอฟต์แวร์</option>
                        <option value="นักวิเคราะห์การเงินอาวุโส">นักวิเคราะห์การเงินอาวุโส</option>
                        <option value="ผู้เชี่ยวชาญด้าน E-Commerce">ผู้เชี่ยวชาญด้าน E-Commerce</option>
                        <option value="เจ้าหน้าที่ประสานงานฝ่ายบุคคล">เจ้าหน้าที่ประสานงานฝ่ายบุคคล</option>
                        <option value="ผู้ดูแลระบบเครือข่าย">ผู้ดูแลระบบเครือข่าย</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกตำแหน่งงานที่ต้องการสมัคร</div>
                </div>

                <h5 class="text-secondary border-bottom pb-2 my-4">ข้อมูลส่วนบุคคล</h5>

                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="required-star">*</span></label>
                        <select class="form-select" id="prefix" name="prefix" required>
                            <option value="" selected disabled>เลือก</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                        </select>
                        <div class="invalid-feedback">กรุณาเลือกคำนำหน้าชื่อ</div>
                    </div>

                    <div class="col-md-5">
                        <label for="firstName" class="form-label">ชื่อ (ภาษาไทย) <span class="required-star">*</span></label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                        <div class="invalid-feedback">กรุณากรอกชื่อ</div>
                    </div>

                    <div class="col-md-4">
                        <label for="lastName" class="form-label">นามสกุล (ภาษาไทย) <span class="required-star">*</span></label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                        <div class="invalid-feedback">กรุณากรอกนามสกุล</div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="birthday" class="form-label">วัน/เดือน/ปีเกิด <span class="required-star">*</span></label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                    <div class="invalid-feedback">กรุณาระบุวัน/เดือน/ปีเกิด</div>
                </div>

                <h5 class="text-secondary border-bottom pb-2 my-4">ประวัติการศึกษาและทักษะ</h5>

                <div class="mb-4">
                    <label for="education" class="form-label fw-semibold">ระดับการศึกษาสูงสุด <span class="required-star">*</span></label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" selected disabled>-- เลือกระดับการศึกษาสูงสุดที่สำเร็จ --</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                        <option value="ปวส./อนุปริญญา">ปวส. / อนุปริญญา</option>
                        <option value="มัธยมปลาย/ปวช.">มัธยมปลาย / ปวช.</option>
                    </select>
                    <div class="invalid-feedback">กรุณาเลือกระดับการศึกษาสูงสุด</div>
                </div>
                
                <div class="mb-4">
                    <label for="specialSkills" class="form-label fw-semibold">ความสามารถพิเศษ / ทักษะเฉพาะทาง</label>
                    <textarea class="form-control" id="specialSkills" name="specialSkills" rows="3" placeholder="ระบุทักษะสำคัญ..."></textarea>
                </div>

                <div class="mb-4">
                    <label for="workExperience" class="form-label fw-semibold">ประสบการณ์ทำงาน (สรุปโดยย่อ)</label>
                    <textarea class="form-control" id="workExperience" name="workExperience" rows="5" placeholder="ระบุชื่อบริษัท, ตำแหน่ง..."></textarea>
                </div>

                <h5 class="text-secondary border-bottom pb-2 my-4">เอกสารประกอบการสมัคร</h5>

                <div class="mb-4">
                    <label for="resumeFile" class="form-label fw-semibold">อัปโหลดไฟล์เรซูเม่ (Resume/CV) <span class="required-star">*</span></label>
                    <input class="form-control" type="file" id="resumeFile" name="resumeFile" accept=".pdf,.doc,.docx" required>
                    <div class="form-text">เฉพาะไฟล์ PDF, DOC, DOCX เท่านั้น</div>
                    <div class="invalid-feedback">กรุณาอัปโหลดไฟล์เรซูเม่</div>
                </div>
                
                <div class="form-check mb-4 mt-4">
                    <input class="form-check-input" type="checkbox" value="1" id="dataConsent" name="dataConsent" required>
                    <label class="form-check-label small" for="dataConsent">
                        ข้าพเจ้าขอรับรองว่าข้อมูลข้างต้นเป็นความจริงและยินยอมให้บริษัทฯ ใช้ข้อมูลเพื่อพิจารณารับสมัครงาน
                    </label>
                    <div class="invalid-feedback">กรุณายืนยันความถูกต้องของข้อมูล</div>
                </div>

                <div class="d-grid mt-5">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg">ส่งใบสมัคร</button>
                </div>
            </form>
        </div>

        <?php
        if (isset($_POST['Submit'])) {
            include_once("connectdb.php");

            $position = mysqli_real_escape_string($conn, $_POST['position']);
            $prefix = mysqli_real_escape_string($conn, $_POST['prefix']);
            $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
            $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
            $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
            $education = mysqli_real_escape_string($conn, $_POST['education']);
            $specialSkills = mysqli_real_escape_string($conn, $_POST['specialSkills']);
            $workExperience = mysqli_real_escape_string($conn, $_POST['workExperience']);
            $dataConsent = isset($_POST['dataConsent']) ? 1 : 0;

            $resumeFile = $_FILES['resumeFile']['name'];
            $ext = pathinfo($resumeFile, PATHINFO_EXTENSION);
            $newfilename = date('YmdHis')."_".rand(1000,9999).".".$ext;
            $target_dir = "uploads/";
            
            if (!is_dir($target_dir)) { mkdir($target_dir, 0777, true); }
            
            if (move_uploaded_file($_FILES["resumeFile"]["tmp_name"], $target_dir . $newfilename)) {
                // 4. แก้ไข SQL Command ให้ระบุชื่อคอลัมน์ให้ครบตามฐานข้อมูลของคุณ
$sql = "INSERT INTO application (
            a_position, a_prefix, a_firstName, a_lastName, 
            a_birthday, a_education, a_specialSkills, a_workExperience, 
            a_resumeFile, a_dataConsent
        ) VALUES (
            '$position', '$prefix', '$firstName', '$lastName', 
            '$birthday', '$education', '$specialSkills', '$workExperience', 
            '$newfilename', '$dataConsent'
        )";
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('บันทึกข้อมูลสำเร็จ'); window.location.href='index.php';</script>";
                } else {
                    echo "<div class='alert alert-danger m-3'>Error SQL: " . mysqli_error($conn) . "</div>";
                }
            } else {
                echo "<div class='alert alert-danger m-3'>ไม่สามารถอัปโหลดไฟล์ได้</div>";
            }
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
(function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }
            form.classList.add('was-validated')
        }, false)
    })
})()
</script>
</body>
</html>