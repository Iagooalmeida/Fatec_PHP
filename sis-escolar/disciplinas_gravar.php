<?php
require_once "classes/Disciplina.php";

$disciplina = new Disciplina();

$disciplina->nome_disciplina = $_POST['nome_disciplina'];
$disciplina->carga_horaria = $_POST['carga_horaria'];

$disciplina->inserir();
?>