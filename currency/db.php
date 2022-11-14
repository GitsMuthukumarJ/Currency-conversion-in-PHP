<?php

$hostName = 'localhost';
$userName = 'root';
$passWord = '2v7!wGxrQAv!';
$dataBase = 'new_drgalen';

$db = mysqli_connect($hostName, $userName, $passWord, $dataBase);

if(!$db){
    die("Connection Failed: " . mysqli_connect_error());
}

?>