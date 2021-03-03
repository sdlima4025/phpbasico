<?php
/**SESSÃO COM O BD, EM QUANTO O BROWSER ESTIVER ABERTO
 * COOKIE GUARDA A INFORMAÇÃO NO NAVEGADOR*/
// GERAR UMA SESSÃO
session_start();

$_SESSION["teste"] = "Sérgio Lima";

echo "A sessão foi estabelecida";

// GERAR UM COOKIE
setcookie("meuteste", "fulano de tal", time() + 3600);

echo " Meu ookie ´e de : ".$_COOKIE["meuteste"];
?>
