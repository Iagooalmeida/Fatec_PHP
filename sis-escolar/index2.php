<?php
    //Verifica se o usuário tem SESSION no login
    require_once 'usuario-verifica.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <ul>
        <h1>Sistema Acadêmico</h1>
        <li><a href="#">Alunos</a></li>
        <li><a href="turmas-listar.php">Turmas</a></li>
        <li><a href="#">Disciplina</a></li>
    </ul>
    <a href="usuario-logout.php">Sair</a>
</body>
</html>
