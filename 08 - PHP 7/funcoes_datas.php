<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Funções datas</title>
</head>
<body>
    
    <?php 
    
        /*
        //recuperação da data atual
        echo date('d') . '<br/>' ;//recuperar a data atual
        echo date('D') . '<br/>';//recuperar a representação do dia da semana

        // dia/mes/ano horas:minutos
        echo date('d/m/Y H:i') . '<br/>';

        //
        echo date_default_timezone_get();
        date_default_timezone_set('America/Sao_Paulo');
        echo '<br/>';
        echo date('d/m/Y H:i') . '<br/>';*/

        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        //timestamp
        //01/01/1970 -- 2018-04-24 (js -> milissegundos / php -> segundos)

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br/>';
        echo $data_final . ' - ' . $time_final;
        echo '<br/>';

        $diferenca_times = $time_final - $time_inicial;
        //$diferenca_times = abs($time_inicial - $time_final); abs - volta o valor absoluto de um número
        echo 'A diferença de segundos entre a data inicial e a data final é ' .  $diferenca_times . '.' . '<br/>';

        $segundos_existem_dia = 24 * 60 * 60;

        echo 'Um dia tem ' . $segundos_existem_dia . ' segundos.';
        echo '<br/>';

        $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

        echo 'A diferença de dias entre as datas é ' . $diferenca_de_dias_entre_as_datas ;


    
    ?>


</body>
</html>