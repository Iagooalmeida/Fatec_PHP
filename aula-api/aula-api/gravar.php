<?php
$nome = $_POST['nome'];
$cep = $_POST['cep'];
$endereco = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['Cidade'];
$uf = $_POST['estado'];

echo "<h1>Cliente cadastrado</h1><br>";
echo "Nome: $nome <br>";
echo "CEP: $cep <br>";
echo "Endereco: $endereco <br>";
echo "Bairro: $bairro <br>";
echo "Cidade: $cidade <br>";
echo "UF: $uf";
?>