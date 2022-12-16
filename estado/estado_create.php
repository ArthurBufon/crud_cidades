<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Novo Estado</title>
</head>
<body>

<div class="container mt-5">

    <?php include('../message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Novo Estado
                        <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../crud/create.php" method="POST">
                        <div class="mb-3 form-control">
                            <label>Estado</label>
                            <input type="text" name="nomeEstado" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Sigla</label>
                            <input type="text" name="siglaEstado" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <input class="btn btn-success" type="submit" value="Cadastrar">
                        </div>
                        <input type=hidden name="tabela" value="estados">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container mt-4">
    <?php include('../message.php'); ?>
    <div class="row">
        <div class="col-md-12">

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Estado</th>
                    <th>Sigla</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("../conexao.php"); #chama o arquivo
                $conn = conectaBD();
                $sql = "SELECT idEstado, nomeEstado, siglaEstado FROM estados";
                $resultado = mysqli_query($conn, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $linha['nomeEstado']; ?></td>
                        <td><?php echo $linha['siglaEstado']; ?></td>
                    </tr>
                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>