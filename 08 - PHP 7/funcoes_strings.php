<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Funções strings</title>
</head>
<body>
    
    <?php 
    
        $texto = 'curso completo de PHP';

        $virgula = '22.35';

        //string to lower
        echo $texto;
        echo '<br/>';
        echo strtolower($texto);
        echo '<hr/>';

        //string to upper
        echo $texto;
        echo '<br/>';
        echo strtoupper($texto);
        echo '<hr/>';

        //upper case first
        echo $texto;
        echo '<br/>';
        echo ucfirst($texto);
        echo '<hr/>';

        //string lenght
        echo $texto;
        echo '<br/>';
        echo strlen($texto);
        echo '<hr/>';

        //string lenght
        echo $texto;
        echo '<br/>';
        echo str_replace('PHP', 'JavaScript', $texto);
        echo '<br/>';
        echo str_replace('P', 'F', $texto);
        echo '<br/>';
        echo str_replace('p', 'j', $texto);
        echo '<br/>';
        echo $virgula;
        echo '<br/>';
        echo str_replace('.', ',', $virgula);
        echo '<hr/>';

        //string lenght
        echo $texto;
        echo '<br/>';
        //'curso completo de PHP'
        // 01234567...20
        echo substr($texto, 6, 8);
        echo '<hr/>';

    ?>


</body>
</html>