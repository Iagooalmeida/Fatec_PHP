<?php
$num1 = $_POST['txtnum1'];
$num2 = $_POST['txtnum2'];

if($num1 < $num2){
    $num1 = $_POST['txtnum2'];
    $num2 = $_POST['txtnum1'];
}

for($i = $num2;$i<= $num1;$i++){
    echo "$i <br>";
}

?>
