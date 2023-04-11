<?php
    $dsn = 'mysql:host=localhost;dbname=jcportfolio;port=3306;charset=utf8';

    try{
        $pdo = new PDO($dsn, 'JcPortfolio', 'QC5rx)$p7W%k52');
    }catch(PDOException $exception){
        echo'Erreur : '.$exception->getMessage();
    }
?>