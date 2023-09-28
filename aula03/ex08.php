<?php
$num1 = $_POST['txtnum'];

if ($num1 == 0){
    echo "Número nulo";
}
elseif($num1 < 0){
    echo "Número negativo";
}
else{
    echo "Número positivo";
}
?>
