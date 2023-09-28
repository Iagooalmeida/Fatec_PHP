<h3>Progressão Aritimética</h3><br>

<?php
$termo = $_POST['termo'];
$quant = $_POST['quant'];
$razao = $_POST['razao'];

for($i = 1; $i <= $quant; $i++){
    echo " a $i ..... $termo <br>";
    $termo *= $razao;
}
?>