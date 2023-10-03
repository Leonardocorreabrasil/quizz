<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$user = "root";
$pass = "leonardo";
$db = 'quizz';
$host = 'localhost';
/*$port = 3306;*/


/*$conn = new PDO("mysql:host=$host;port=$port;dbname=". $dbname, $user, $pass);*/




try {

   

   $conn = new PDO("mysql:host={$host};dbname={$db}",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


} catch(PDOException $e) {
    print "Erro: " . $e->getMessage() . "</br>";
    die();
}

?>