<?php
// PARAMETROS DE ACESSO AO DB
$dsn = "mysql:dbname=blog;host=localhost"; // PARAMETROS "TIPODE DB: NOME DO DB; LOCAL DO DB";
$dbuser = "root";
$dbpass = "";

// INICIANDO A BIBLIOTECA  PDO
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);// INTÂNCIANDO A CONEXÃO COM PDO

 $sql = "SELECT * FROM usuarios WHERE  email = 'qualquer@gmail.com'";
 $sql = $pdo->query($sql);

 if ($sql->rowCount() > 0) {

    foreach($sql->fetchAll() as $usuario) {
        echo "Nome: ".$usuario["nome"]." - " .$usuario["email"]."<br>";
    }
     
 }else {
     echo "Não há Cadastro";
 }

}catch(PDOException $e) { // TRATANDO FALHAS DE CONEXÃO COM PDOException
    echo "FALHOU!".$e->getMessage();

}
/**
 *  try consegue recuperar erros que possam ocorrer no código fornecido em seu bloco. 
 * O catch por sua vez faz o tratamento dos erros que aconteceram.
 */

?>