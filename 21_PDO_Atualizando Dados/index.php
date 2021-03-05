<?php
// PARAMETROS DE ACESSO AO DB
$dsn = "mysql:dbname=blog;host=localhost"; // PARAMETROS "TIPODE DB: NOME DO DB; LOCAL DO DB";
$dbuser = "root";
$dbpass = "";

// INICIANDO A BIBLIOTECA  PDO
try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);// INTÂNCIANDO A CONEXÃO COM PDO

    $nome = 'Luiz Lima';
    $email = 'teste4@hotmail.com';
    $senha = md5("123");

 $sql = "UPDATE usuarios SET  nome = '$nome'  WHERE id = 10";
 $sql = $pdo->query($sql); // como é um Update não é obrigatório quardar  dado em uma vaviavel ex:$sql.

 echo  "Usuario Alterado com Sucesso!: ".$pdo->lastInsertId();

}catch(PDOException $e) { // TRATANDO FALHAS DE CONEXÃO COM PDOException
    echo "FALHOU!".$e->getMessage();

}
/**
 *  try consegue recuperar erros que possam ocorrer no código fornecido em seu bloco. 
 * O catch por sua vez faz o tratamento dos erros que aconteceram.
 */

?>