<?php

class Core{
    public function __construct() {
        $this->run();
    }
    function run()
    {
        if(isset($_GET['p']))
        {  
            $url = $_GET['p'];//pegou a url pelo metodo get e colocou na variavel url
        }
        //caso possua algo apos o dominio
        if(!empty($url))
        {
           $url_array =  explode('/',$url);//caso a url seja = www.site.com/penio/cum ele vai pegar o penio e cum earmazenar em posições em um array 
           $controller = $url_array[0].'Controller';
           array_shift($url_array);
           if(isset($url_array)&&!empty($url_array))
           {
                $metodo = $url_array[0];
                array_shift($url_array);
           }
           else//enviou somente a classe
           {
                $metodo = 'index';
           }
           if(count($url_array)>0)
           {
                $parametros = $url_array;
           }
           else
           {
            $parametros = 0;
           }
        }
        else//caso a url esteja assim: www.site.com/
        {
            $controller = 'homeController';
            $metodo = 'index';
        }
        $caminho = "MVC/controllers/$controller.php";
        if(!file_exists($caminho) && !method_exists($controller,$metodo))
        {
            $controller = 'homeController';
            $metodo = 'index';
        }
        $c = new $controller;
        call_user_func_array(array($c,$metodo),array($parametros));

    }
}