<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - if/else - operadores lógicos</title>
</head>
<body>
    

<?php 
    // F            V = falso
    if(5 == 3 && 10 > 3) {
        echo 'verdadeiro';
    } else {
        echo 'falso';
    }

    echo '<br/>';
    echo '<hr/>';

    //  F           V = Verdadeiro
    if(5 == 3 OR 10 > 3) {
        echo 'verdadeiro';
    } else {
        echo 'falso';
    }

    echo '<br/>';
    echo '<hr/>';

    //  F           V = Verdadeiro
    if(5 == 3 XOR 10 > 3) {
        echo 'verdadeiro';
    } else {
        echo 'falso';
    }

    echo '<br/>';
    echo '<hr/>';

    // F = verdadeiro
    if(!('a' == 'b')) {
        echo 'verdadeiro';
    } else {
        echo 'falso';
    }

    echo '<br/>';
    echo '<hr/>';

    //() estabelece precedência

    //      V         V         F =  Verdadeiro  
    if ((22 == 22 && 3 == 3) || 5 != 5) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

?>
</body>
</html>