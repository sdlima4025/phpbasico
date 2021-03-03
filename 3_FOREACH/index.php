<?php
/** FOREACH == para cada / AUXILIA NA MANIPULAÇÃO DE ARRAYS
 * Utilidade: Listando colunas ou listas 
*/
$aluno = array(
    "Professora" => "Matilda",
    "Aluno" => "Sérgio",
    "Matéria" => "Matemática",
    "Nota" => 7,
    "Estado" => "Bahia",
    "Pais" => "Brasil",
    

);
foreach($aluno as $chave => $dado) {
    echo $chave." = ".$dado."<br/>";
}

?>
