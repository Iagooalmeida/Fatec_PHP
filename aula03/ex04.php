<?php
$num = $_POST['txtnum'];
if ($num < 100){
    echo "Número Inválido";
}
else{
    echo "Numero $num é valido";
}
echo "Programa encerrado!!";
?>
