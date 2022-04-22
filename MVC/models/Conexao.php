<?php
class Conexao{
    private static $instancia;
    
    public static function getConexao()
    {
        if(!isset(self::$instancia))
        {
            $dbname = 'varnahal';
            $user = 'root';
            $pass = '';
            $host = 'localhost';
            try 
            {
                self::$instancia = new PDO("mysql:dbname=$dbname;host=$host",$user,$pass);
            } 
            catch (Exception $e)
            {
                echo $e ;
            }
            return self::$instancia;
        }
    }

}