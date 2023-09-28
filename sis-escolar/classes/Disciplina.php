<?php
class Disciplina{
    public $id;
    public $nome_disciplina;
    public $carga_horaria;

    public function inserir(){
        $sql = "INSERT INTO tb_disciplinas (nome_disciplina, carga_horaria) VALUES (
            '" .$this->nome_disciplina. "', '" .$this->carga_horaria. "')";

            $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
            $conexao->exec($sql);

            echo "Registrar: gravado com sucesso";
    }

    public function listar(){
        $sql = "select * From tb_disciplinas";
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}
?>