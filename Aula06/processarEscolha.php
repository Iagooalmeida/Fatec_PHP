<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $escolha = $_POST['areaEstudo'];

    switch ($escolha) {
        case 'Ciência da Computação':
            $mensalidade = 800.00;
            break;
        case 'Engenharia':
            $mensalidade = 900.00;
            break;
        case 'Ciências Sociais':
            $mensalidade = 750.00;
            break;
        case 'Artes':
            $mensalidade = 700.00;
            break;
        default:
            echo "Área de estudo inválida.";
            exit;
    }

    echo "<h1>Área de estudo</h1><br><br>";
    echo "O estudo do aluno foi: " . $escolha . "<br>";
    echo "O valor da mensalidade é: R$ " . $mensalidade;
}
?>