<?php

class BDConection
{
    const HOST      = "localhost";
    const NOMEBANCO = "agendinha";
    const USUARIO   = "root";
    const SENHA     = "root";

    public static function getConexao(){
        $conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);

        return $conexao;
    }

}

//teste conexao
//$con = new Conexao();
//$con->getConexao();
//PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'