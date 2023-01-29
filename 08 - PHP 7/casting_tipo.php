<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - casting de tipos</title>
</head>
<body>

    <?php 
    
        //gettype() => retorna o tipo da variável
        $valor = '10.25';
        //$valor2 = (float) $valor; //float, double, real (real não é mais suportado pelo PHP)
        //$valor2 = (string) $valor;

        //$valor2 = (int) $valor; // int ou integer servem para um valor inteiro
        //$valor2 = (string) $valor; 

        //$valor2 = (boolean) $valor; //bool, boolean

        

        $valor2 = (integer) $valor;

        echo $valor . ' ' . gettype($valor);
        echo '<br/>';
        echo $valor2 . ' ' . gettype($valor2);

    ?>
    
</body>
</html>