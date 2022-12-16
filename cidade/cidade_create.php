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

    <title>Nova Cidade</title>
</head>
<body>

<div class="container mt-5">

    <?php include('../message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Nova Cidade
                        <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../crud/create.php" method="POST">
                        <div class="mb-3 form-control">
                            <label>Cidade</label>
                            <input type="text" name="nomeCidade" class="form-control" placeholder="xxxx">
                        </div>
                        <div class="mb-3 form-control">
                            <label>População</label>
                            <input type="text" name="populacao" class="form-control" placeholder="000.000.000">
                        </div>
                        <div class="mb-3 form-control">
                            <label>CEP</label>
                            <input type="text" name="cep" class="form-control" placeholder="00000-000">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Estado</label>
                            <select name="siglaEstado">
                                <?php
                                include_once("../conexao.php");
                                $conn = conectaBD();
                                $sql = "SELECT `idEstado`, `nomeEstado`, `siglaEstado` FROM `estados`";
                                $resultado = mysqli_query($conn, $sql);

                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                    ?>

                                    <option value="<?php echo $linha['idEstado']; ?>"> <?php echo $linha['siglaEstado'] ?></option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3 form-control">
                            <input class="btn btn-success" type="submit" value="Cadastrar">
                        </div>
                        <input type=hidden name="tabela" value="cidades">
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
                    <th>Cidade</th>
                    <th>População</th>
                    <th>CEP</th>
                    <th>Estado</th>
                    <th colspan="2">Ação</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once("../conexao.php"); #chama o arquivo
                $conn = conectaBD();
                $sql = "SELECT cidade.idCidade, cidade.nomeCidade, cidade.populacao, cidade.cep, cidade.idEstado, estado.siglaEstado as siglaEstado FROM cidades cidade join estados estado on estado.idEstado = cidade.idEstado";
                $resultado = mysqli_query($conn, $sql);

                while ($linha = mysqli_fetch_assoc($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $linha['nomeCidade']; ?></td>
                        <td><?php echo $linha['populacao']; ?></td>
                        <td><?php echo $linha['cep']; ?></td>
                        <td><?php echo $linha['siglaEstado']; ?></td>
                        <td><a class="btn btn-success" href="<?php echo "cidade_edit.php?idCidade=" . $linha['idCidade'] . "&nomeCidade=" . $linha['nomeCidade'] . "&populacao=" . $linha['populacao'] . "&cep=" . $linha['cep'] . "&siglaEstado=" . $linha['siglaEstado'] ?>">Alterar</a></td>
                        <td><a class="btn btn-danger" href="<?php echo "../crud/delete.php?idCidade=" . $linha['idCidade'] . "&tabela=cidades" ?>">Excluir</a></td>
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