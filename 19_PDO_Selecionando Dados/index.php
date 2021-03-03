<?php
// PARAMETROS DE ACESSO AO DB
$dsn = "mysql:dbname=blog;host=localhost"; // PARAMETROS "TIPODE DB: NOME DO DB; LOCAL DO DB";
$dbuser = "root";
$dbpass = "";

// INICIANDO A BIBLIOTECA  PDO
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);// INTÂNCIANDO A CONEXÃO COM PDO

    echo "Conectou!";

}catch(PDOException $e) { // TRATANDO FALHAS DE CONEXÃO COM PDOException
    echo "FALHOU!".$e->getMessage();

}
/**
 *  try consegue recuperar erros que possam ocorrer no código fornecido em seu bloco. 
 * O catch por sua vez faz o tratamento dos erros que aconteceram.
 */

?>