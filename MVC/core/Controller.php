<?php

class Controller
{
    public $dados;

    public function __construct()
    {
        $this->dados = array();
    }
    function CarregarTemplate($nomeView,$dadosModel = array())
    {
        $this->dados = $dadosModel;
        require 'views/template.php';
    }
    function CarregarViewNoTemplate($nomeView,$dadosModel = array())
    {
        extract($dadosModel);
        require "views/".$nomeView.".php";
    }  
}