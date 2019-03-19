<?php

function redirectToIndexWithMessage($message){
    $_SESSION['message'] = $message;
    header("Location: ./index.php");
    die();
}

function wyswietlanie(){
    $db = getDB();
    $query = $db->prepare("SELECT * FROM filmy WHERE tytul LIKE ?  OR rezyser LIKE ? OR rezyser LIKE ?");
    $tytul = (!empty($_GET['tytul']))?$_GET['tytul']."%":"";
    $rezyser = (!empty($_GET['rezyser']))?$_GET['rezyser']."%":"";
    $rok = (!empty($_GET['rok']))?$_GET['rok']."%":"";
    // if(!empty($_GET['tytul'])){
    //     $title= $_GET['tytul']."%";
    // }else{
    //     $title= "";
    // }
    $query->execute([$tytul, $rezyser, $rok]);
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

