<?php
$letra = $_POST['txtletra'];

if ($letra == "A" || $letra == "a"){
    echo "Azul";
}
elseif ($letra == "V" || $letra == "v"){
    echo "Vermelho";
}
else{
    echo "Cor Inválida";
}
?>
