<?php
session_start();
require_once 'functions.php';



if(isset($_GET['tytul']) && isset($_GET['rezyser']) && isset($_GET['rok'])){
    if(!empty($_GET['tytul']) && !empty($_GET['rezyser']) && !empty($_GET['rok'])){
            $query1=wyswietlenie();

                

           
           
        
