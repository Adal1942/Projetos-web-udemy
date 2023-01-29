<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - variaveis</title>
</head>
<body>
    <?php 

        //string
        $nome = 'Adauto Nascimento';

        //int
        $idade = 25;

        //float
        $peso = 82.5;

        //boolean
        $smoke = true;

        /* Lógica */

        $idade = 30;
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $smoke ?></p>
</body>
</html>