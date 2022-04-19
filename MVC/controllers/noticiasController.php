<?php

class noticiasController extends Controller
{

    function index()
    {
        /*$c = new usuarios;
        $c->getuserdata();*/                            //exemplo de como seria chamar a model
        $this->CarregarTemplate('noticias'/*,$dados*/);
    }
    function getNoticia()
    {
        /*$c = new usuarios;
        $c->getuserdata();*/                            //exemplo de como seria chamar a model
        $this->CarregarTemplate('getnoticia'/*,$dados*/);
    }
}


?>