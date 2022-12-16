<?php
session_start();
require '../conexao.php';
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Editando Estado</title>
</head>
<body>

<div class="container mt-5">

    <?php include('../message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editando estado
                        <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../crud/update.php" method="POST">
                        <div class="mb-3 form-control">
                            <label>ID</label>
                            <input value="<?php echo $_GET['idEstado'] ?>" readonly type="number" name="idEstado" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Estado</label>
                            <input value="<?php echo $_GET['nomeEstado'] ?>" type="text" name="nomeEstado" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Sigla</label>
                            <input value="<?php echo $_GET['siglaEstado'] ?>" type="text" name="siglaEstado" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <input class="btn btn-primary" type="submit" value="Editar">
                        </div>
                        <input type=hidden name="tabela" value="estados">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>