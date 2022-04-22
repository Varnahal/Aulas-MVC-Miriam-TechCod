<?php

class Controller
{
    public $dados;
    public $dados2;

    public function __construct()
    {
        $this->dados = array();
    }
    function CarregarTemplate($nomeView,$dadosModel = array(),$dados2 =null)
    {
        $this->dados = $dadosModel;
        $this->dados2 = $dados2;
        require 'views/template.php';
    }
    function CarregarViewNoTemplate($nomeView,$dadosModel = array())
    {
        extract($dadosModel);
        require "views/".$nomeView.".php";
    }  
}