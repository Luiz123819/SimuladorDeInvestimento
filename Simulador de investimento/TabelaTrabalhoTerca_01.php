<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="post" class="form-control">
            <div class="row">
                <div class="col-sm-12">
                    <h1 style="text-align: center; margin-top: 25px; margin-bottom: 25px; background-color: aqua;">Desafio</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <p>
                        <label for="text">Valor Inicial</label>
                    </p>
                    <p>
                        <input type="number" class="form-control " name="Valor_Inicial" placeholder="Digite Aqui...">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="text">Valor  Mensal</label>
                    </p>
                    <p>
                        <input type="number" class="form-control" name="Valor_aplicado_mensal" placeholder="Digite Aqui...">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="text">Juros Anual</label>
                    </p>
                    <p>
                        <input type="number" class="form-control" name="Juros_Anual" placeholder="Digite Aqui...">
                    </p>
                </div>
                <div class="col-sm-3">
                    <p>
                        <label for="text">Tempos em Anos</label>
                    </p>
                    <p>
                        <input type="number" class="form-control" name="Tempos_em_anos" placeholder="Digite Aqui...">
                    </p>
                </div>
                <div class="row">
                    <div class="col-sm-12" style="text-align: center;">
                        <p>
                            <button class="btn btn-success">Calcular</button>
                            <a href="TabelaTrabalhoTerca_01.php" class="btn btn-danger">Limpar</a>
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php
    include('TabelaTrabalhoTerca_02.php');
    ?>
    
</body>
</html>