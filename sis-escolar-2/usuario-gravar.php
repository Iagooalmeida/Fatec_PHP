<?php
try{
    $usuario = $_POST["usuario"];

    //Gera um hash SHA-256 da senha recebido pelo formulário
    $senha = hash("sha256", $_POST["senha"]);

    $now = new DataTime();
    $date = $now->format('d-m-Y');

    $sql = "INSERT INTO tb_usuarios (usuario, senha, datacad)
            VALUES ('{$usuario}', '{$senha}', '{$date}')";
            include_once "classes/conexao.php";
            $conexao->exec($sql);
            echo "<h3>Registro gravado com secesso!</h3>";
            echo "<a href='index.html'>Fazer login</a>";
}
catch (Exception $erro){
    //echo $erro->getMessage();
    echo "Ocorreu um erro. Por favor, tente novamente mais tarde.";
}