<?php
// PARAMETROS DE ACESSO AO DB
$dsn = "mysql:dbname=blog;host=localhost"; // PARAMETROS "TIPODE DB: NOME DO DB; LOCAL DO DB";
$dbuser = "root";
$dbpass = "";

// INICIANDO A BIBLIOTECA  PDO
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    echo "Conectou!";

}catch(PDOException $e) {
    echo "FALHOU!".$e->getMessage();

}


?>