<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Loops for</title>
</head>
<body>
    
    <?php 
    
        /*
        $x = 1;
        while($x <10){

        }

        do {

        } while ($x <10);*/

        /*for(variavel; condicao;incremento){

        }*/
        /*for($x =1 ; $x <=10 ; $x++){//ao contrário do do_while se a variavel atender a condição antes de executar, o programa nem executa
            echo $x . '<br/>';
        }*/

        for($x = 11; true ; $x++){
            if($x >= 20){
                break;
            }

            echo $x . '<br/>';
        }
    
    
    ?>

</body>
</html>