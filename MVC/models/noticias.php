<?php
require_once 'Conexao.php';

class noticias
{
    private $conn;

    public function __construct()
    {
        $this->conn = Conexao::getConexao();
    }
}