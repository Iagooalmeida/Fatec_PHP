<?php
$nome = $_POST['txtnome'];
$sexo = $_POST['txtsexo'];
$idade = $_POST['txtidade'];

if($sexo == "Masculino" && $idade >= 18){
    echo "$nome, Você já pode realizar o alistamento militar";
}else if($sexo == "Masculino"){
    echo "$nome Você pode se alistar quando tiver 18 anos";
}else{
    echo "$nome, Você não pode se alistar";
}
?>
