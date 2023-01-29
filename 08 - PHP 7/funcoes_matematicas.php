<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $num = 7.3;
        $num2 = -5.499999;

        echo ceil($num); //arredonda para cima
        echo '<br/>';
        echo ceil($num2); 

        echo '<hr/>';

        echo floor($num);//arredonda para baixo
        echo '<br/>';
        echo floor($num2);

        echo '<hr/>';

        echo round($num);//arredonda com base na fracao
        echo '<br/>';
        echo round($num2);

        echo '<hr/>';

        echo rand(10, 20);//gerar um valor aleatório 
        echo '<br/>';
        echo rand();//gerar um valor aleatório 
        echo '<br/>';
        echo getrandmax();//máximo valor aleatório do sistema operacional

        echo '<hr/>';

        echo sqrt(2);//raiz quadrada de um número

        
    ?>

</body>
</html>