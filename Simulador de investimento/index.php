<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simulador De Investimento</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
    <body>
        <div class="container">
            <form action method="post" class="form-control">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Simulador De Investimento</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="text">Valor Inicial:</label>
                        <p>
                            <input type="number" name="ValorInicial"
                                id="ValorInicial" placeholder="Digite Aqui...">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <label for="text">Valor Mensal:</label>
                        <p>
                            <input type="number" name="ValorMensal"
                                id="ValorMensal" placeholder="Digite Aqui...">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <label for="text">Juros Anual:</label>
                        <p>
                            <input type="number" name="JurosAnual"
                                id="JurosAnual" placeholder="Digite Aqui...">
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <label for="text">Tempos em Anos:</label>
                        <p>
                            <input type="number" name="TemposEmAnos"
                                id="TemposEmAnos" placeholder="Digite Aqui...">
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Calcular</button>
                            <a href="index.php" class=" btn btn-danger">Limpar</a>
                        </div>
                    </div>

                </form>
            </div>
            <script src="js/bootstrap.js"></script>
            <?php
                include('Operacoes.php');
            ?>
        </body>
    </html>