<form method="post"action="">
 แม่สูตรคูณ <input type="number" min="1" max="1000" name="a" autofocus required>
    <button type="submit" name="Submit">OK</button>
 </form>
 <hr>
 
 
<?php
if(isset($_POST['Submit'])){
    $m = $_POST['a'];
    for($i=1; $i<=12; $i++){
        $x = $m * $i;
        echo "{$m} x {$i} = {$x}<br>";
    }
}

?>