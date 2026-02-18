<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อรัญญา เนื่องคำอินทร์(เกด)</title>
</head>

<body>
<h1>อรัญญา เนื่องคำอินทร์(เกด)</h1>

<table border="1">
<tr>
    <th>ประเทศ</th>
    <th>ยอดขาย</th> 
    
</tr>

<?php
include_once("connectdb.php");
$sql = "SELECT p_country, SUM(p_amount) AS total FROM popsupermarket GROUP BY p_country";
$rs = mysqli_query($conn,$sql);
while ($data = mysqli_fetch_array($rs)) {
?>
<tr>
    <td><?php echo $data['p_country'];?></td>
    <td><?php echo $data['total'];?></td>
    
</tr>
<?php 
}
mysqli_close($conn);
?> 
</body>
</html>