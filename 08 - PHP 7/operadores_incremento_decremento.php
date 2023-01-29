<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - operadores de incremento e decremento</title>
</head>
<body>
    
    <h3>Pós-incremento</h3>
    <?php 
    
        $a = 7;

        echo 'o valor contido em a é ' . $a . '. <br/>';
        echo 'o valor contido em a após o incremento é ' . $a++ . '. <br/>';
        echo 'o valor atualizado é ' . $a . '. <br/>';
    
    ?>

    <?= '<hr/>';?>

    <h3>Pré-incremento</h3>
    <?php 
    
        $b = 7;

        echo 'o valor contido em b é ' . $b . '. <br/>';
        echo 'o valor contido em b pré o incremento é ' . ++$b . '. <br/>';
        echo 'o valor atualizado é ' . $b . '. <br/>';
    
    ?>

    <?= '<hr/>';?>

    <h3>Pós-decremento</h3>
    <?php 

        $c = 7;

        echo 'o valor contido em c é ' . $c . '. <br/>';
        echo 'o valor contido em c após o decremento é ' . $c-- . '. <br/>';
        echo 'o valor atualizado é ' . $c . '. <br/>';

    ?>

    <?= '<hr/>';?>

    <h3>Pré-decremento</h3>
    <?php 

        $d = 7;

        echo 'o valor contido em d é ' . $d . '. <br/>';
        echo 'o valor contido em d pré o decremento é ' . --$d . '. <br/>';
        echo 'o valor atualizado é ' . $d . '. <br/>';

    ?>


</body>
</html>