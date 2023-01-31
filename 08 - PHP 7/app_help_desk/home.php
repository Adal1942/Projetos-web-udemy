<?php require_once "validador_acesso.php"; 

    

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
      .card-home {
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
            <a href="logoff.php" class="nav-link">SAIR</a>
          </li>
        </ul>
      </nav>

      <div class="container">    
        <div class="row">

          <div class="card-home">
            <div class="card">
              <div class="card-header">
                Menu
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6 d-flex justify-content-center">
                    <a href="./abrir_chamado.php">
                      <img src="formulario_abrir_chamado.png" width="70" height="70">
                    </a>  
                  </div>
                  <div class="col-6 d-flex justify-content-center">
                    <a href="./consultar_chamado.php">
                      <img src="formulario_consultar_chamado.png" width="70" height="70">
                    </a>
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