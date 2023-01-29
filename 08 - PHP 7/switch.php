<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - switch</title>
</head>
<body>
    

    <?php 

        $parametro = '2';

        switch ($parametro) {
            case 1:
                echo 'entrou no case 1';
                # code...
                break;
            case 2:
                echo 'entrou no case 2';
                # code...
                break;
            case 3:
                echo 'entrou no case 3';
                # code...
                break;
            default:
                echo 'entrou no default';
                # code...
                break;
        }
    ?>

</body>
</html>