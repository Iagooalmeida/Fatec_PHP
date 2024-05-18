<?php
    if (isset($_POST['peso']) && isset($_POST['altura'])) {

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura * $altura);
        $imc = number_format($imc, 2); // Round to two decimal places

        echo "<h1>Calculadora de IMC</h1><br><br>";

        echo "Seu IMC é: " . $imc ."<br><br>";

        if ($imc < 18.5) {
            echo "O seu estado é: abaixo do peso";
        } elseif ($imc < 24.9) {
            echo "O seu estado é: peso normal";
        } elseif ($imc < 29.9) {
            echo "O seu estado é: sobrepeso";
        } elseif ($imc < 34.9) {
            echo "O seu estado é: obesidade grau 1";
        } elseif ($imc < 39.9) {
            echo "O seu estado é: obesidade grau 2";
        } else {
            echo "O seu estado é: obesidade grau 3 (Obsidade mórbida)";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
?>