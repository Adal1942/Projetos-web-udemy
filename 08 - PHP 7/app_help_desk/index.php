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
        .card-login {
        padding: 30px 0 0 0;
        width: 350px;
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
        </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="http://localhost/app_help_desk/valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') {  ?>

                <div class="text-danger">
                    Usuário ou senha inválido(s)
                </div>

                <?php  } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') {  ?>

                <div class="text-danger">
                    Faça login antes de tentar acessar as páginas protegidas
                </div>

                <?php  } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
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