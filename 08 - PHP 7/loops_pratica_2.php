<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Loops pratica 2</title>
</head>
<body>
    

    <?php 

        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2500, 'data de nascimento' => '30/10/1997'),
            array('nome' => 'Maria', 'salario' => 3000),
            array('nome' => 'Julia', 'salario' => 3500)
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        /*foreach($funcionarios as $idx => $nome_funcionario) {
            echo $idx . ') ' . $nome_funcionario . '<br/>';
        }*/

        foreach($funcionarios as $idx => $funcionario) {
            
            foreach($funcionario as $idx2 => $valor){
                echo $idx2 . ' - ' . $valor . '<br/>'; 
            }
            echo '<hr/>';
        }
    
    ?>

</body>
</html>