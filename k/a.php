<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>งาน K อรัญญา เนื่องคำอินทร์ (66010914039)</title>

    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        button {
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            margin: 10px;
            border-radius: 8px;
        }

        .btn-green {
            background-color: green;
            color: white;
        }

        .btn-yellow {
            background-color: orange;
            color: white;
        }

        img {
            margin-top: 20px;
            width: 300px;
            display: none;   /* ซ่อนไว้ก่อน */
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <h1>งาน K อรัญญา เนื่องคำอินทร์ 66010914039</h1>
    

    <button class="btn-green" onclick="showMyImage()">รูปของฉัน</button>
    <button class="btn-yellow" onclick="showTeacherImage()">รูปอาจารย์</button>

    <br>

    <img id="myImage" src="images/myphoto.jpg" alt="รูปของฉัน">
    <img id="teacherImage" src="images/teacher.jpg" alt="รูปอาจารย์">

    <script>
        function showMyImage() {
            document.getElementById("myImage").style.display = "block";
            document.getElementById("teacherImage").style.display = "none";
        }

        function showTeacherImage() {
            document.getElementById("teacherImage").style.display = "block";
            document.getElementById("myImage").style.display = "none";
        }
    </script>

</body>
</html>