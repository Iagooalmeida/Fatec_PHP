<?php

$sub = $_POST['txtletra'];

$letras = array("A", "B", "C", "D", "E");

for ($i = 0; $i <= 4; $i++){
    if ($letras[$i] == $sub){
        $letras[$i] = "X";
    }
    echo "$letras[$i] <br>";
}
?>
