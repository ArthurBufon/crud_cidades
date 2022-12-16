<?php
session_start();
require 'conexao.php';
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD PHP</title>
</head>
<body>

<div class="container mt-4 text-center">

    <?php include('message.php'); ?>
    <h1>Cadastro de cidades</h1>
    <h7>Insira novos estados/cidades</h7>


    <div class="card align-items-center mx-auto mt-3" style="width: 35rem;">
        <img src="https://t2.tudocdn.net/603541?w=1920" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="container">
                <a href="estado/estado_create.php" class="btn btn-primary mt-2">Novo Estado</a>
                <a href="estado/estado_list.php" class="btn btn-primary mt-2">Listar Estados</a>
            </div>
            <div class="container">
                <a href="cidade/cidade_create.php" class="btn btn-success mt-2">Nova Cidade</a>
                <a href="cidade/cidade_list.php" class="btn btn-success mt-2">Listar Cidades</a>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>