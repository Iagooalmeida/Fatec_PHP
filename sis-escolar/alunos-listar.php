<?php
    require_once "classes/Aluno.php";
    $aluno = new Aluno();
    $lista = $aluno->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Acadêmico</title>
</head>
<body>
    <h1>Sistema Acadêmico</h1>
    <h3>Listar Alunos</h3>
    <!-- Aqui vai a Tabela com a Lista de alunos, pbtida no banco de dados -->
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Turma</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $linha): ?>
        <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><img src="img/<?php echo $linha['foto']?>" height="60"></td>
            <td><?php echo $linha['nome'] ?></td>
            <td><?php echo $linha['email'] ?></td>
            <td><?php echo $linha['descTurma'] ?></td>
            <td>
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <br>
    <a href="alunos-inserir.php">Novo Aluno</a>
</body>
</html>
