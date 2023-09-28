<?php
//Inclui o arquivo quem contém a classe Turma
require_once "classes/Turma.php";

//Cria um novo objeto turma
$turma = new Turma();

//Chama o método "listar" e armazena o resultado em uma váriavel
$lista = $turma->listar();
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
    <h3>Lista Turmas</h3>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Turma</th>
            <th>Ano</th>
            <th>Ação</th>
        </tr>
        <?php foreach ($lista as $linha): ?>
        <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['descTurma'] ?></td>
            <td><?php echo $linha['ano'] ?></td>
            <td>
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
