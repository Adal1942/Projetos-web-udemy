<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Terceira Prática</title>
</head>
<body>
    
    <h1>Sorteio da Mega sena</h1>

    <?php 
    

        for($num = 0; $num < 6; $num++) {

            $idx = rand(1, 60);
            
            echo $idx . ' | ';   
        }

        /*$pao = 167;
        $ovo = 89;

        $eu = 504;

        $soma = $pao + $ovo;

        $diferenca = $eu - $soma;

        echo '<br/>' . $diferenca;*/

       /* $num = 0;

        do {
            $idx = rand(1, 60);

            echo $idx . ' | ';

            $test = $idx;
            
            $num++;
        } while ($num < 6);*/
    
    ?>

</body>
</html>