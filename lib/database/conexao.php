<?php

abstract class Conexao
{
    private static $conn;

    public static function getConn()
    {

        if (self::$conn == null) {
            self::$conn = new PDO('mysql:host=localhost;dbname=modelodb', 'root', '');
        }
        return self::$conn;
    }
}
