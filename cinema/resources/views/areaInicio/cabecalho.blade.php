<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UFOPmovieTickets.com</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/b7b5ad8085.js"></script>
    <link href="/css/carousel.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Asap|Roboto|Walter+Turncoat" rel="stylesheet">
  </head>
  <body>

    <!--Navbar fixa do topo da página-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="/">Início</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="/listafilmes/acao">Ação</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/listafilmes/comedia">Comédia</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/listafilmes/animacao">Animação</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/listafilmes/romance">Romance</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/listafilmes/suspense">Suspense</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/listafilmes/terror">Terror</a>
          </li>
        </ul>

        <div class="mt-2 mt-md-0">
          @if (Auth::guest())
            <a href="/login" class="btn btn-outline-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Fazer Login</a>
            <a href="/register" class="btn btn-outline-warning"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastrar</a>
          @else

            <label for="" class="text-muted" id="tituloinicio"><strong>Seja bem-vindo(a),</strong>{{ Auth::user()->name }}.  </label>
            <a href="/carrinho" class="btn btn-outline-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ver meu carrinho</a>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

          @endif
        </div>

      </div>

    </nav>

    @yield('conteudo')



    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer id="backfooter">
      <br><br>
      <div class="container">
        <div class="row">
          <div class="col-md-6" align="center">
            <img src="/img/logo.png" alt="logo" width="45%">
          </div>
          <div class="col-md-6">
            <label for=""><strong>Dupla: </strong>Cayque Santos, Vinicius Arantes</label><br>
            <label for=""><strong>Disciplina: </strong>Sistemas Web I</label><br>
            <label for=""><strong>Professor: </strong>Fernando Oliveira</label><br>
            <label for=""><strong>Período: </strong>2017.1</label><br>
            <p class="float-right"><a href="#">Ir para o topo</a></p>
          </div>
        </div>
      </div>
    </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>
  <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  <script src="../../../../assets/js/vendor/holder.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
