<?php 

    session_start();

    //variavel que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    $usuario_id = null;

    $usuario_perfil_id = null;

    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');


    //Usuários do sistema
    $usuarios_app = array(
        array('id' => 1 ,'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
        array('id' => 2 ,'email' => 'usuario@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 1),
        array('id' => 3 ,'email' => 'jose@teste.com.br', 'senha' => '1234' ,'perfil_id' => 2),
        array('id' => 4 ,'email' => 'maria@teste.com.br', 'senha' => '1234' , 'perfil_id' => 2),
    );

    /*echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';*/


    foreach($usuarios_app as $user) {
        //print_r($user);
        //$user['email'];
        //$user['senha'];

        /*echo 'Usuário app: ' . $user['email'] . ' / ' . $user['senha'];
        echo '<br/>';
        echo 'Usuário form: ' . $_POST['email'] . ' / ' . $_POST['senha'];
        echo '<hr/>';*/

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }

        /*echo $_POST['email'];
        echo '<br/>';
        echo $_POST['senha'];
        echo '<hr/>';*/
    }
        if($usuario_autenticado) {
            echo 'Usuario autenticado';
            $_SESSION['autenticado'] = 'SIM';
            $_SESSION['id'] = $usuario_id;
            $_SESSION['perfil_id'] = $usuario_perfil_id;
            header('Location: home.php');
        } else {
            $_SESSION['autenticado'] = 'NÃO';
            header('Location: index.php?login=erro');
        }



    /*print_r($_GET);

    echo '<br />';


    echo $_GET['email'];
    echo '<br />';
    echo $_GET['senha'];*/

    /*print_r($_POST);

    echo '<br />';


    echo $_POST['email'];
    echo '<br />';
    echo $_POST['senha'];*/
    
?>