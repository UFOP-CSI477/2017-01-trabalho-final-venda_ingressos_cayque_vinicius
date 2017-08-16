<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UFOPmovieTickets.com</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/b7b5ad8085.js"></script>
  </head>
  <body id="fundo">

    <div id="cabecalho" align="center">
      <img src="img/logo.png" alt="" width="20%">
      <h2>Área do administrador</h2><br>
    </div>

    <div id="navbar">
      <div class="container" >
        <ul class="nav nav-pills nav-tabs" id="teste">
          <li class="active"><a data-toggle="pill" href="#home">Início</a></li>
          <li><a data-toggle="pill" href="#menu1">Personalização da tela inicial</a></li>
          <li><a data-toggle="pill" href="#menu2">Filmes</a></li>
          <li><a data-toggle="pill" href="#menu3">Sessões</a></li>
          <li><a data-toggle="pill" href="#menu3">Usuários</a></li>
        </ul>
      </div>
    </div>

    <div class="container">
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <h3>Início</h3>
          <h4><p>Seja bem-vindo(a) a área administrativa do UFOPmovieTickets.com!</h4>
          <br>
          Todas as tarefas que são permitidas pelo sistema foram divididas em uma das categorias
          acima. </p>
        </div>

        <div id="menu1" class="tab-pane fade">
          @yield('conteudo1')
        </div>

        <div id="menu2" class="tab-pane fade">
          <h3>Menu 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>

        <div id="menu3" class="tab-pane fade">
          <h3>Menu 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>

    </div>
  </div>

  </body>
</html>
