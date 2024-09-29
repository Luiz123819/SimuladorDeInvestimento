<div class="container p-0">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Mês</th>
                        <th>Valor</th>
                        <th>Aporte</th>
                        <th>Taxa ao Ano</th>
                        <th>Total sem juros</th>
                        <th>Juros Mensal</th>
                        <th>Total</th>
                    </tr>

                </thead>
        </div>

        <tbody>
            <?php
    

            if ($_POST) {
                $Tempo = $_POST['TemposEmAnos'] * 12;
                $ValorInicial = $_POST['ValorInicial'];
                $ValorMensal = $_POST['ValorMensal'];
                $JurosAnual = $_POST['JurosAnual'];



                $JurosAnual = $JurosAnual / 12;
                $JurosAnual = $JurosAnual / 100;

                for ($i = 1; $i <= $Tempo;  $i++) {
                    $ValorSemJuros =  $ValorInicial + $ValorMensal;
                    $Juros = $ValorSemJuros * $JurosAnual;
    
                    echo '
        <tr>
         <td>Mês - ' . $i . '</td>
        <td>R$ ' . number_format($ValorInicial, 2, ",", ".") . '</td>
        <td>R$ ' . number_format($ValorMensal, 2, ",", ".") . '</td>
        <td> ' . number_format($_POST['JurosAnual']) . ' %</td>
        <td>R$ ' . number_format($ValorSemJuros, 2, ",", ".") . '</td>
        <td>R$ ' . number_format($Juros, 2, ",", ".") . '</td>
        ';
                    $ValorInicial = $ValorSemJuros + $Juros;
                    echo '
              <td>R$ ' . number_format($ValorInicial, 2, ",", ".") . '</td>
        </tr>
        ';
                }
            }
            ?>
        </tbody>
        <!-- Fica como rodape -->
        <!-- <tfoot>
            <tr>
                <th>Mês</th>
                <th>Valor</th>
                <th>Aporte</th>
                <th>Taxa ao Ano</th>
                <th>Total sem juros</th>
                <th>Juros</th>
                <th>Total</th>
            </tr>
        </tfoot> -->

        </table>
    </div>
</div>