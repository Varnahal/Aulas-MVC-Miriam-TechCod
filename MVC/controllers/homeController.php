<?php

class homeController extends Controller
{

    function index()
    {
        /*$c = new usuarios;
        $c->getuserdata();*/                            //exemplo de como seria chamar a model
        $this->CarregarTemplate('home'/*,$dados*/);
    }
}


?>