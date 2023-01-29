<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Loops while</title>
</head>
<body>
    
    <?php 
    

        $num = 1;

        //operadores comparação / lógicos
        /*echo '-- Início do Loop -- <br/>';
        while($num < 10) {
            echo $num . '<br/>';
            $num++; //critério de parada
        }
        echo '-- Fim do loop -- ';*/

        /*echo '-- Início do Loop -- <br/>';
        while($num < 60) {
            echo $num . '<br/>';
            $num += 7; //critério de parada
        }
        echo '-- Fim do loop -- ';*/

        /*echo '-- Início do Loop -- <br/>';
        while(true) {
            echo $num . '<br/>';

            $num += 7; //critério de parada
            
            if($num > 100){
                break;
            }
        }
        echo '-- Fim do loop -- ';*/

        echo '-- Início do Loop -- <br/>';
        while($num < 10) {

            $num++; //critério de parada

            if($num == 2 || $num == 6){
                continue;
            }
            

            echo $num . '<br/>';
        }
        echo '-- Fim do loop -- ';





    ?>

</body>
</html>