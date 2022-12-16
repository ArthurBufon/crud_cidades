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

    <title>Editando Cidade</title>
</head>
<body>

<div class="container mt-5">

    <?php include('../message.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Editando cidade
                        <a href="../index.php" class="btn btn-danger float-end">VOLTAR</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="../crud/update.php" method="POST">
                        <div class="mb-3 form-control">
                            <label>ID</label>
                            <input value="<?php echo $_GET['idCidade'] ?>" readonly type="number" name="idCidade" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Cidade</label>
                            <input value="<?php echo $_GET['nomeCidade'] ?>" type="text" name="nomeCidade" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>População</label>
                            <input value="<?php echo $_GET['populacao'] ?>" type="text" name="populacao" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>CEP</label>
                            <input value="<?php echo $_GET['cep'] ?>" type="text" name="cep" class="form-control">
                        </div>
                        <div class="mb-3 form-control">
                            <label>Estado</label>
                            <select name="idEstado">
                                <?php
                                include_once("../conexao.php"); #chama o arquivo
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
                            <input class="btn btn-primary" type="submit" value="Editar">
                        </div>
                        <input type=hidden name="tabela" value="cidades">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>