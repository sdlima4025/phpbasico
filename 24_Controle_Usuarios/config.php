<?php
$sdn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO($sdn,$dbuser,$dbpass);

}catch (PDOException $e) {
  
}