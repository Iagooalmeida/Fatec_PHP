<?php
    require_once "classes/Turma.php";
    $turma = new Turma();
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
    <h3>Novo Aluno</h3>
    <form enctype="multipart/form-data" action="alunos-gravar.php" method="POST">
        <label for="txtnome">Nome: </label>
        <input type="text" name="txtnome">
        <br><br>
        <label for="txtemail">Email: </label>
        <input type="text" name="txtemail">
        <br><br>
        <label for="txtfoto">Foto:</label>
        <input type="file" name="imgfoto">
        <br><br>
        <label for="selturma">Turma: </label>
        <select name="selturma">
            <option value="">Selecione... </option>
            <?php
                foreach ($lista as $linha):
                    echo "<option value='{$linha['id']}'>
                                          {$linha['descTurma']}
                           </option>";
                endforeach
            ?>
        </select>
        <br><br>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>
