<?php

session_start();
$sunucu="localhost";
$database="proje2";
$kuladi="root";
$parola="";
$baglan=new PDO("mysql:host=$sunucu;dbname=$database;charset=utf8","$kuladi","$parola");//sınavda çıkacak
//$baglan=new PDO("mysql:host=localhost;dbname=bote3b;char set=utf8","root","");//alternatif yazım
?>