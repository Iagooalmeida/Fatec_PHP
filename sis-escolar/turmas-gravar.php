<?php

//Inclui o arquivo que contém a definição da classe Turma
require_once "classes/turma.php";
//Criar um novo objeto Turma
$turma = new Turma();

//Define as propriedades descTurma e ano do objeto turma
//Com os valores enviados pelo formuário.
$turma->descTurma = $_POST['descTurma'];
$turma->ano = $_POST['ano'];

//Chama o método inserir() no objeto Turma para inserir
//os dados da nova turma no banco de dados
$turma->inserir();
?>
