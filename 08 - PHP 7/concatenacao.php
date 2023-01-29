<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - concatenação</title>
</head>
<body>
    

<?php 

    $nome = 'Adauto';

    $cor = 'azul';

    $idade = 25;

    $atividade_preferida = 'andar de bicicleta';

    //operação .
    echo 'Olá ' . $nome . ', vi que sua cor favorita é ' . $cor . ', estou vendo que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida . '.';

    echo '<hr/>';

    // operação " 

    echo "Olá $nome, vi que sua cor favorita é $cor, estou vendo que você possui $idade anos e que gosta de $atividade_preferida.";
?>
</body>
</html>