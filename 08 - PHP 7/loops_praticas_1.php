<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Loops pratica 1</title>
</head>
<body>
    
    <?php 
    
        //$registros = array('Título noticia 1', 'Título noticia 2', 'Título noticia 3');
        $registros = array(
                     array('Título' => 'Título noticia 1', 'conteúdo' => 'Coteúdo noticia 1'),
                     array('Título' => 'Título noticia 2', 'conteúdo' => 'Coteúdo noticia 2'),
                     array('Título' => 'Título noticia 3', 'conteúdo' => 'Coteúdo noticia 3'),
                     array('Título' => 'Título noticia 4', 'conteúdo' => 'Coteúdo noticia 4'),
                     array('Título' => 'Título noticia 5', 'conteúdo' => 'Coteúdo noticia 5'),
                     array('Título' => 'Título noticia 6', 'conteúdo' => 'Coteúdo noticia 6')
                    );

        $idx = 0;

        /*echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<hr/>';*/

        //count -> conta a quantidade de elementos de array
        echo 'O array possui: ' . count($registros) . ' registros';
        echo '<br/>';

        /*while ($idx < count($registros)) {

            echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteúdo'] . '</p>';
            echo '<hr/>';

            $idx++;
        }*/

        /*do {
            echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteúdo'] . '</p>';
            echo '<hr/>';

            $idx++;
        }while ($idx < count($registros));*/

        for($idx = 0; $idx < count($registros); $idx++){
            echo '<h3>' . $registros[$idx]['Título'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteúdo'] . '</p>';
            echo '<hr/>';
        }

    
    ?>


</body>
</html>