<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastro-xbank';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

/* if($conexao->connect_errno)
{
    echo "Erro";
} 
else
{ 
    echo "Conexão efetuada com sucesso.";
} */

?>