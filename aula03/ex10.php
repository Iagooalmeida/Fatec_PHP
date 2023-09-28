<?php
$num = $_POST['txtnum'];
$i = 1;

while ($i <= $num){
    if($i % 2 != 0){
        print("$i <br>");
    }
    $i += 1;
}
?>
