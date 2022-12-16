<?php

$servername = "localhost";
$database = "crud_cidades";
$username = "root";
$password = "";
$conexao= mysqli_connect($servername, $username, $password, $database);
#realiza a conexão com o banco de dados mysql
function conectaBD(){
    $servername = "localhost";
    $database = "crud_cidades";
    $username = "root";
    $password = "";

    // criar conexão
    $conexao= mysqli_connect($servername, $username, $password, $database);
    //print_r($conexao);
    if(!$conexao){
        die("Conexão falhou! ".mysqli_connect_error());
    }
    return ($conexao);
}

function desconectaBD($conexao){
    mysqli_close($conexao);
}