<?php

class noticiasController extends Controller
{

    function index()
    {
        $c = new noticias;
        $j = $c->getNoticia();                   
        $this->CarregarTemplate('noticias',array(),$j);
    }
    function entretenimento($idnoticia)
    {
        $c = new noticias;
        $j = $c->getNoticiaPorID($idnoticia);
        //print_r($j);
        $this->CarregarTemplate('entretenimento',$j);
    }
    function futebol($idnoticia)
    {
        /*$c = new usuarios;
        $c->getuserdata();*/  
        $c = new noticias;
        $j = $c->getNoticiaPorID($idnoticia);
        print_r($j);  
        exit;                              //exemplo de como seria chamar a model
        $this->CarregarTemplate('futebol'/*,$dados*/);
    }
    
}


?>