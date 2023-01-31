<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Loops do while</title>
</head>
<body>
    

<?php 

    //$x = 10;
    $x = 1;
    //o do while garante a execução pelo menos uma vez
    do{
        echo 'X = ' . $x  . '<br/>';

        $x++;//critério de parada

    } while ($x < 9);

    /*echo '<br/>';

    while($x < 9){
        echo 'Entrou no while';
    }*/


?>
</body>
</html>