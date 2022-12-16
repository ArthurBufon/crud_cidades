<?php
include_once("../conexao.php");


if($_POST["tabela"] == 'estados'){
    salvaEstado($_POST["nomeEstado"], $_POST["siglaEstado"]);
    header("Location: ../estado/estado_list.php");
} else if($_POST["tabela"] == 'cidades'){
    salvaCidade($_POST["nomeCidade"], $_POST["populacao"], $_POST["cep"], $_POST["siglaEstado"]);
    header("Location: ../cidade/cidade_list.php");
}
function salvaEstado($nomeEstado, $siglaEstado){
    $conexao = conectaBD();
    $dados= "INSERT INTO estados(nomeEstado, siglaEstado) VALUES ('{$nomeEstado}', '{$siglaEstado}')";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Cadastro com Sucesso!";
    return ($conexao);
    desconectaBD($conexao);
}

function salvaCidade($nomeCidade, $populacao, $cep, $idEstado){
    $conexao = conectaBD();
    $dados= "INSERT INTO cidades (nomeCidade, populacao, cep, idEstado) VALUES ('{$nomeCidade}', '{$populacao}', '{$cep}', '{$idEstado}')";
    mysqli_query($conexao,$dados) or die(mysqli_error());
    echo "Cadastro com Sucesso!";
    desconectaBD($conexao);
}
