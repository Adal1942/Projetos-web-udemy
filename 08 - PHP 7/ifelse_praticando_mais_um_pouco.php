<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - if/else - praticando mais um pouco</title>
</head>
<body>
    
    <?php 

        $usuario_possui_cartao_loja = true;
        $valor_compra = 25;

        $valor_frete = 50;
        $recebeu_desconto_frete = true;

        if($usuario_possui_cartao_loja && $valor_compra >= 400) {
            $valor_frete = 0;
        }/*Condição encadeada*/ else if ($usuario_possui_cartao_loja && $valor_compra >= 300) {
            $valor_frete = 10;
        } else if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
            $valor_frete = 25;
        } else {
            $recebeu_desconto_frete = false;
        }

    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'Sim' : 'Não'; ?>
        <?php 

            // condição> ? true : false

            

            /*if($usuario_possui_cartao_loja == true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }*/
        ?>

    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>
    
    <p>Recebeu desconto no frete: 
        <?php 
            
            $teste = $recebeu_desconto_frete ? 'Sim' : 'Não';

            echo $teste;
            
            /*if($recebeu_desconto_frete == true) {
                echo 'Sim';
            } else {
                echo 'Não';
            }*/
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>