<?php
//atributos básicos para fazer a conexão
$servidor="localhost"; //servidor local
$usuario="root"; 
$senha="";
$banco="cadastrouece"; //nome do banco 

$conexao=mysqli_connect($servidor,$usuario,$senha,$banco) or die;
if(!mysqli_set_charset($conexao,'UTF8')){
    echo "não conseguiu setar o charset";
}
?>
