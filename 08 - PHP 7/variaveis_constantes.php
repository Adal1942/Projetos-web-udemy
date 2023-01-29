<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Variáveis contantes</title>
</head>
<body>

    <?php 

        define('BD_URL', 'endereco_bd-dev');
        define('BD_USUARIO', 'usuario-dev');
        define('BD_SENHA', 'senha-dev');

        // lógica
        define('BD_URL', 'endereco_bd_prod');

        
        echo BD_URL . '<br/>';
        echo BD_USUARIO . '<br/>';
        echo BD_SENHA . '<br/>';
    ?>
    
</body>
</html>