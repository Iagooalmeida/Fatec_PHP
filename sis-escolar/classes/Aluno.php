<?php
class Aluno{
    public $id;
    public $nome;
    public $foto;
    public $email;
    public $turma_id;

    public $nomeFoto;
    public $caminhoFoto;

    public function __construct($id = false)
    {
        if ($id){
            $this->id=$id;
            $this->carregar();
        }
    }

    public function carregar(){
        //query SQL para buscar o aluno no banco de dados pelo id
        $sql = "SELECT * FROM tb_alunos WHERE id =" . $this->id;
        include "classes/conexao.php";

        // Execução da query a armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos da turma recuperados do banco às propriedades do objeto
        $this->id = $linha['id'];
        $this->nome = $linha['nome'];
        $this->foto = $linha['foto'];
        $this->email = $linha['email'];
        $this->turma_id = $linha['fk_tb_turmas_id'];
    }

    public function listar(){
        $sql = "SELECT a.id, a.foto, a.nome, a.email, a.fk_tb_turmas_id, t.descTurma
                FROM tb_alunos a JOIN tb_turmas t
                ON a.fk_tb_turmas_id = t.id
                ORDER BY a.id";
        include "classes/conexao.php";
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function inserir(){
        //A função do PHP "preg_match()", pega a extensão da imagem e carrega a variável $ext
        preg_match("/.(gif|bmp|png|jpeg){1}$/i", $this->foto["name"], $ext);

        /*Esta linha usa as funções PHP md5(), uniqid() e time()
        para gerar um nome único para a imagem. Depois concatna com a extensão extraida na linha acima*/
        $this->nomeFoto = md5(uniqid(time()) . "." . $ext[1]);

        //Esta linha concatena o caminho da pasta que guardaremos as imagens com nome da imagem
        $this->caminhoFoto = 'img/' . $this->nomeFoto;

        //aqui utilizamos a função PHP move_upload_file() para salvar a imagem na pasta
        move_uploaded_file($this->foto["tmp_name"], $this->caminhoFoto);


        $sql = "INSERT INTO tb_alunos (nome, foto, email, fk_tb_turmas_id) VALUES (
            '{$this->nome}',
            '{$this->nomeFoto}',
            '{$this->email}',
            '{$this->turma_id}'
        )";
        include "classes/conexao.php";
        $conexao->exec($sql);
        echo "Registro gravado com sucesso!";
    }
}
?>
