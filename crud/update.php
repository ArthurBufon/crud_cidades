<?php
include_once("../conexao.php");
if ($_POST["tabela"] == 'estados') {
    editaEstado($_POST["idEstado"], $_POST["nomeEstado"], $_POST["siglaEstado"]);
    header("Location: ../estado/estado_list.php");
} else if ($_POST["tabela"] == 'cidades') {
    editaCidade($_POST["idCidade"], $_POST["nomeCidade"], $_POST["populacao"], $_POST["cep"], $_POST["idEstado"]);
    header("Location: ../cidade/cidade_list.php");
}
function editaEstado($idEstado, $nomeEstado, $siglaEstado)
{
    $conexao = conectaBD();
    $sql = "UPDATE  estados SET nomeEstado = '{$nomeEstado}', siglaEstado = '{$siglaEstado}' WHERE idEstado = '{$idEstado}'";
    mysqli_query($conexao, $sql) or die(mysqli_error());
    echo "Editado com Sucesso!";
    desconectaBD($conexao);
}

function editaCidade($idCidade, $nomeCidade, $populacao, $cep, $idEstado)
{
    $conexao = conectaBD();
    $sql = "UPDATE cidades SET nomeCidade = '{$nomeCidade}', populacao= '{$populacao}', cep = '{$cep}', idEstado='{$idEstado}' WHERE  idCidade = '{$idCidade}'";
    mysqli_query($conexao, $sql) or die(mysqli_error());
    echo "Editado com Sucesso!";
    desconectaBD($conexao);
}
