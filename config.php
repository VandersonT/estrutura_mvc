<?php
    require 'environment.php';

    $config = array();

    if(ENVIRONMENT == 'development'){
        define("base_url", "http://localhost/estrutura_mvc/");
        $config['dbname'] = 'estrutura_mvc';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }else{
        define("base_url", "https://meusite.com/"); 
        $config['dbname'] = 'estrutura_mvc';
        $config['host'] = 'localhost';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }

    global $pdo;
    try{ 
        $pdo = new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'], $config['dbuser'], $config['dbpass']);
    }catch(PDOException $e){
        echo 'ERRO: '.$e->getMessage();
        exit;
    }