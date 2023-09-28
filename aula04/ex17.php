<?php
$txtpreco1 = $_POST['txtpreco1'];
$txtpreco2 = $_POST['txtpreco2'];
$txtdesc1 = $_POST['txtdesc1'];
$txtdesc2 = $_POST['txtdesc2'];

$totalPreco1 = $txtpreco1 - ($txtpreco1 * $txtdesc1 / 100);
$totalPreco2 = $txtpreco2 - ($txtpreco2 * $txtdesc2 / 100);

$total = $totalPreco1 + $totalPreco2;

echo "O valot do 1° produto com desconto é R$: $totalPreco1 <br>";
echo "O valot do 2° produto com desconto é R$: $totalPreco2 <br>";
echo "O valor total é R$ $total";
