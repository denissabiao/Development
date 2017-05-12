<?php
/*
$servidor_mysql = 'mysql.coopsaude.com.br';
$nome_banco = 'coopsaude';
$usuario = 'coopsaude';
$senha = 'dennis69';
try {
    $con = new PDO("mysql:host=$servidor_mysql;dbname=$nome_banco","$usuario","$senha"); 
} catch (PDOException $e) {
    echo $e->getMessage();
    exit(1);
}
*/

$servidor_mysql = 'mysql.suportebh.com.br';
$nome_banco = 'suportebh12';
$usuario = 'suportebh12';
$senha = 'dennis363';
try {
    $con = new PDO("mysql:host=$servidor_mysql;dbname=$nome_banco","$usuario","$senha"); 
} catch (PDOException $e) {
    echo $e->getMessage();
    exit(1);
}
?>