<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Primeira prática</title>
</head>
<body>
    
    <?php 

        $idade = 15;
        $peso = 60;

        $sangue = 'não atende aos requisitos!';

        if(($idade >= 16 && $idade <= 69) && $peso >= 50) {
            $sangue = 'atende aos requisitos!';
        }

    ?>

    <h1>Doação de sangue</h1>
    <hr><br>

    <p>Digite sua idade e seu peso!</p>
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>

    <p>Você <?= $sangue ?> </p>


</body>
</html>