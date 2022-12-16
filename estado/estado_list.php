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

    <title>Litando Estados</title>
</head>
<body>

<div class="container mt-4">
    <?php include('../message.php'); ?>
    <div class="row">
        <h1 class="text-center">Listando todos os Estados</h1>
        <div class="col-md-12">

            <a href="../index.php" class="btn btn-danger float-end ms-1 mb-1">VOLTAR</a>
            <a href="estado_create.php" class=" mx-auto btn btn-success float-end ms-1 mb-1">Adicionar Estado</a>

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Estado</th>
                    <th>Sigla</th>
                    <th colspan="2">Ação</th>
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
                        <td><a class="btn btn-success" href="<?php echo "estado_edit.php?idEstado=" . $linha['idEstado'] . "&nomeEstado=" . $linha['nomeEstado'] . "&siglaEstado=" . $linha['siglaEstado'] ?>">Alterar</a></td>
                        <td>
                            <a class="btn btn-danger" href="<?php echo "../crud/delete.php?idEstado=" . $linha['idEstado'] . "&tabela=estados" ?>">Excluir</a>
                        </td>
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