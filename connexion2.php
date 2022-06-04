<?php
try{
    $pdo=new PDO('mysql:host=localhost;dbname=db_article','root','');
}catch (exception $e) {
    die("erreur de connexion au base de donnees!!");
}
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>