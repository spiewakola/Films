<?php
function redirectWithMessage($message, $pageName){
    $_SESSION['message'] = $message;
    header("Location: ./$pageName");
    die();
}

function wyswietlanie(){
    $db = getDB();
     $query = $db->prepare("SELECT * FROM filmy WHERE (tytul=? AND rezyser = ? AND rok=?)");
    $query->execute([$_GET['tytul'], $_GET['rezyser'], $_GET['rok']]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
    
}
function getDB(){
    $host = '127.0.0.1'; 
    $db   = 'filmy';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $connectionDetails = "mysql:host=$host;dbname=$db;charset=$charset";

    $pdo = new PDO($connectionDetails, $user, $pass);
    return $pdo;
}

