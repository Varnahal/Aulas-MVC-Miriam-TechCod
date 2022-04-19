<?php
class Conexao{
    private static $conn;

    private function __construct()
    {
        
    }
    public static function getConexao()
    {
        $dbname = 'Varnahal';
        $user = 'root';
        $pass = '';
        $host = 'localhost';
        try {
            self::$conn = new PDO("mysql:dbname=$dbname;host=$host",$user,$pass);
        } catch (Exception $e) {
            echo $e ;
        }
        return self::$conn;
    }

}