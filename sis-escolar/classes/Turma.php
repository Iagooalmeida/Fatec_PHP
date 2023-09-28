<?php
class Turma
{
    public $id;
    public $descTurma;
    public $ano;

    public function inserir(){
        $sql = "INSERT INTO tb_turmas (descTurma, ano) VALUES (
            '" .$this->descTurma. "', '" .$this->ano. "')";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
            $conexao->exec($sql);

            echo "Registrar: gravado com sucesso";
    }

    public function listar(){
        //Define a string SQL para selecionar todos os registros da tabela
        $sql = "select * From tb_turmas";

        //Cria uma nova conexão PDO com banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        //executa a string SQL na conexão retornando um objeto de resultado
        $resultado = $conexao->query($sql);

        //Extrai todos os requisitos do objeto e os armazena em um array
        $lista = $resultado->fetchAll();

        //Retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
    }

}
?>
