<?php
include_once("../conexao.php");

if($_GET['tabela'] == 'estados'){
    deletaEstado($_GET['idEstado']);
    header("Location: ../estado/estado_list.php");
} else if($_GET['tabela'] == 'cidades'){
    deletaCidade($_GET['idCidade']);
    header("Location: ../cidade/cidade_list.php");
}
function deletaEstado($idEstado){
    $conexao = conectaBD();
    $dados= "DELETE FROM estados 
            WHERE  idEstado = '{$idEstado}'";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    $dados= "DELETE FROM cidades
            WHERE  idEstado = '{$idEstado}'";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Excluído com Sucesso!";
    desconectaBD($conexao);
}

function deletaCidade($idCidade){
    $conexao = conectaBD();
    $dados= "DELETE FROM cidades 
            WHERE  idCidade = '{$idCidade}'";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Excluído com Sucesso!";
    desconectaBD($conexao);
}