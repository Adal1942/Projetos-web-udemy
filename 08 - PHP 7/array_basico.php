<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Array basico</title>
</head>
<body>

    <?php 
    
        //sequenciais (numéricos)
        //$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva', 'abacate');
        //$lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva', 'abacate'];
        //$lista_frutas[] = 'abacaxi';

        /*echo '<pre>'; //aplica uma formatação para melhor visualização
            var_dump($lista_frutas);//informação completa sobre cada item do array
        echo '<pre/>';
        echo '<hr/>';
        print_r($lista_frutas);//informação mais simplificada de cada item do array*/

        //echo $lista_frutas[3];




        //associativos
        //$lista_frutas = array('a' => 'Banana', 'b' => 'Maça', 'c' => 'Morango', 'd' => 'Uva', '3' => 'abacate');
        $lista_frutas = ['a' => 'Banana', 'b' => 'Maça', 'c' => 'Morango', 'd' => 'Uva', '3' => 'abacate'];
        $lista_frutas['w'] = 'jabuticaba';
        echo '<pre>';
        var_dump($lista_frutas);
        echo '<pre/>';

        $lista_frutas['w'] = 'jabuticaba';

        echo $lista_frutas['w'];




    ?>


</body>
</html>