<?php 
    session_start();

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //estamos trabalhando na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //inplode ('#', $_POST);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //fopen('arquivo.hd, 'a');
    //abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a');

    //escrevendo o texto
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    //echo $texto;

    header('Location: abrir_chamado.php');


?>