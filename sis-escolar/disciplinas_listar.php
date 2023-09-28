<?php
//Inclui o arquivo quem contém a classe Turma
require_once "classes/Disciplina.php";

//Cria um novo objeto turma
$disciplina = new Disciplina();

//Chama o método "listar" e armazena o resultado em uma váriavel
$lista = $disciplina->listar();
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
            <th>Disdicplina</th>
            <th>Carga Horaria</th>
            <th>Ação</th>
        </tr>
        <?php foreach ($lista as $linha): ?>
        <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['nome_disciplina'] ?></td>
            <td><?php echo $linha['carga_horaria'] ?></td>
            <td>
                <a href="#">Atualizar</a>
                <a href="#">Excluir</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
