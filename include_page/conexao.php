<?php
/* Conexao com o banco de dados */
$dsn = 'mysql:dbname=aluno_2DS_Carlos;host=localhost';
$user = 'aluno';
$password = 'etec@147';

try {
    $banco = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
