<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Segunda prática</title>
</head>
<body>
    
    <h1>Calculo do imposto de renda</h1>
    <hr>

    <?php 

        function calcularImpostoDeRenda ($salario) {
            if ($salario <= 1903.98) {

              $aliquota = 'Você está isento de imposto';
              return $aliquota;

            } else if ($salario >= 1903.99 && $salario <= 2826.65) {
                
                $salario = ($salario * 7.5) / 100;

              return $aliquota = 'Você terá que pagar ' . $salario . ' reais de imposto.';

            } else if ($salario >= 2826.66 && $salario <= 3751.05) {
                
                $salario = ($salario * 15) / 100;

              return $aliquota = 'Você terá que pagar ' . $salario . ' reais de imposto.';

            } else if ($salario >= 3751.06 && $salario < 4664.68) {
                
                $salario = ($salario * 22.5) / 100;

              return $aliquota = 'Você terá que pagar ' . $salario . ' reais de imposto.';
              
            } else {
                
                $salario = ($salario * 27.5) / 100;

              return $aliquota = 'Você terá que pagar ' . $salario . ' reais de imposto.';
              
            }
        }
    ?>

    <p>Digite seu salário: 2951.25</p>
    <p><?php echo calcularImpostoDeRenda(2951.25); ?></p>

</body>
</html>