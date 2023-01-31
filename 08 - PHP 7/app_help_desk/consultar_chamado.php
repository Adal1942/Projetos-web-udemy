<?php require_once "validador_acesso.php"; ?>

<?php 

  //chamados
  $chamados  = array();

  //abrir o arquivo.hd
  $arquivo = fopen('arquivo.txt', 'r');

  //enquanto houver registros (linhas) a serem recuperados

  while(!feof($arquivo)) { //testa pelo fim de um arquivo
    //linhas
    $registro = fgets($arquivo);
    $chamados[] = $registro;

  }

  //fechar o arquivo aberto
  fclose($arquivo);
  
  //...
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap4/css/bootstrap.min.css">

    <title>App Help Desk</title>

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
      <ul class="navbar-nav">
          <li class="nav-item">
            <a href="./logoff.php" class="nav-link">SAIR</a>
          </li>
        </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

            <?php foreach($chamados as $chamado) { ?>
              
              <?php 
                $chamado_dados = explode('#', $chamado); 

                if($_SESSION['perfil_id'] == 2) {
                  //só vamos exibir o chamado se ele foi criado pelo usuário
                  if($_SESSION['id'] != $chamado_dados[0]){
                    continue;
                  }
                }

                  if(count($chamado_dados) <3) {
                    continue;
                  }
              ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>

                </div>
              </div>
            <?php } ?>  
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="./home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>







    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./bootstrap4/js/bootstrap.min.js"></script>
  </body>
</html>