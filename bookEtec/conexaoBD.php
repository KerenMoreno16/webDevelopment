<?php

$servername = "localhost";
$username = "root";
$password = "usbw"; 
$dbname = "booketec";

try{
    $conexao = new PDO("mysql:dbname=$dbname; host=$servername; port=3307; charset=utf8", $username, $password);
    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "falha ao conectar: ". $e->getMessage();
}
/* 
$conexao = new mysqli($servername, $username, $password, $dbname);
if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
} */ 

?>