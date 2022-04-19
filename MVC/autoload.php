<?php
spl_autoload_register(function($nome_arquivo)
{

    if(file_exists("controllers/$nome_arquivo.php")){
        require "controllers/$nome_arquivo.php";
    }
    elseif(file_exists("core/$nome_arquivo.php"))
    {
        require "core/$nome_arquivo.php";
    }
    elseif(file_exists("models/$nome_arquivo.php"))
    {
        require "models/$nome_arquivo.php";
    }

});
?>