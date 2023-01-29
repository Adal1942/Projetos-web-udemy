<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - array multidimensional</title>
</head>
<body>
    

    <?php 
    
        //$lista_coisas = array();
        $lista_coisas = [];

        //$lista_coisas['frutas'] = array('Banana', 'Maçã', 'Morango', 'Uva');
        $lista_coisas['frutas'] = array(1 => 'Banana',2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');
        $lista_coisas['Pessoas'] = array(1 =>'João', 2 => 'José', 3 => 'Adauto', 4 => 'Sara');


        echo '<pre>';
        print_r($lista_coisas);
        echo '<hr/>';
        echo $lista_coisas['frutas'][3];
        echo '<hr/>';
        echo $lista_coisas['Pessoas'][3];
        echo '</pre>';
    
    ?>

</body>
</html>