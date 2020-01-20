<?php
$vendas = array(50, 20, 30, 40, 20);
$custos = array(28, 14, 74, 23, 98);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>

        <div style="width:500px;">
            <canvas id="grafico"></canvas>  <!--tag html usada em graficos-->

        </div>
        <script type="text/javascript" src="Chart.min.js"></script>      <!--carrega a biblioteca chart-->
        <script type="text/javascript">
            window.onload = function () {
                var contexto = document.getElementById("grafico").getContext("2d");
                var grafico = new Chart(contexto, {//cria um novo grafico
                    type: 'line', //tipo do grafico
                    data: {
                        labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril'], //labels do grafico
                        datasets: [{
                                label: 'Vendas',
                                backgroundColor: 'red', //cor da linha do grafico
                                borderColor: 'red',
                                data: [<?php echo implode(',', $vendas); ?>], //valor de cada label
                                fill: false    //pintura de dentro
                            }, {
                                label: 'Custos',
                                backgroundColor: 'blue',
                                borderColor: 'blue',
                                data: [<?php echo implode(',', $custos); ?>],
                                fill: false
                            }
                        ],
                    }
                });
            }



        </script>
    </body>
</html>
