<?php
$url = 'dados.json';
//Define a URL do arquivo JSON

$json = file_get_contents($url);
//Obtém o conteudo do arquivo JSON como uma string

$data = json_decode($json, true);
// Decodifica a string JSON em um array associativo
// do PHP e o resultado é armazenado na variável $data

foreach ($data as $aluno){
    echo "<h4> ------------------------------------------------ </h4>";
    echo "Nome: {$aluno['nome']} <br>";
    echo "Turma: {$aluno['turma']} <br>";
    echo "<h4>Disciplinas: </h4>";
        foreach ($aluno['disciplinas'] as $disciplina){
            echo "{$disciplina['nome']} - ";
            echo "{$disciplina['professor']} <br>";
        }
}