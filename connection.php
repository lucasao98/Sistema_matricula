<?php

session_start();

function getConnection(){
    try{
        $dsn = 'mysql:host=localhost;dbname=sistema;';
        $username = 'root';
        $password = '';
    
        $pdo = new PDO($dsn,$username,$password);
        
        return $pdo;
    }
    catch(PDOException $ex){
        echo 'Erro: '.$ex->getMessage();
    }    
}