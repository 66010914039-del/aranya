<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อรัญญา เนื่องคำอินทร์(เกด)</title>
</head>

<body>
<h1>อรัญญา เนื่องคำอินทร์(เกด)</h1>
<form method="post"action"number" name="a"autofocus required>
กรอกตัวเลข <input type="number" name="a"autofcus required>
<button type ="submit" name="Submit">OK</button>
</form>
<hr>

<?php
if(isset( $_POST['Submit'])){
	$gender=$_POST['a'];
	echo $_POST['a'];
	if($gender ==1){
		echo"เพศชาย";
	}else if ($gender ==2){
		echo"เพศหญิง";
	}else if($gender ==3){
		echo"เพศทางเลือก";
   } else {
	echo"อื่นๆ";
		
	}
}
?>
</body>
</html>

