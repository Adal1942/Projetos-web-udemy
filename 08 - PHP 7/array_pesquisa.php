<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - array - pesquisa</title>
</head>
<body>
    

    <?php 

        //in_array() -> true ou false para a existência do que está sendo procurado
        //array_search() -> retorna o indice do valor pesquisado ncaso ele exista

        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

        /*echo '<pre>';
        print_r($lista_frutas);
        echo '<pre>';*/

        //echo in_array('Morango', $lista_frutas); // se for true = 1, se for false = vazio
        //$existe = in_array('Morango', $lista_frutas); 
        
        /*if ($existe) {
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }*/

        /*$existe = array_search('salada', $lista_frutas);//caso não encontrado, o retorno é null

        if ($existe != null) {
            echo 'Sim, o valor pesquisado existe no array';
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }*/

        $lista_coisas = ['frutas' => $lista_frutas, 'pessoas' => ['João', 'Maria']];

        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';

        echo in_array('Uva', $lista_coisas['frutas'])



    ?>
</body>
</html>