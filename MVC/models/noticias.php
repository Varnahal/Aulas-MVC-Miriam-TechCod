<?php
require_once 'Conexao.php';

class noticias
{
    private $con;

    public function __construct()
    {
       $this->con = Conexao::getConexao();
    }
    public function getNoticia():array
    {
        $dados = array();
        $cmd = $this->con->query('SELECT n.id, n.titulo, n.nome_imagem, n.texto, t.descricao FROM varnahal.noticias n INNER JOIN tipos_noticias t ON n.fk_id_tipo_noticia = t.id_tipo');
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
    public function getNoticiaPorID($id)
    {
        $dados = array();
        $cmd = $this->con->prepare("SELECT N.*,t.descricao FROM varnahal.noticias n INNER JOIN tipos_noticias t ON n.fk_id_tipo_noticia = t.id_tipo WHERE id = :id");
        $d = $id[0];
        $cmd->bindValue(':id',$d);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        return $dados;
    }
    
}