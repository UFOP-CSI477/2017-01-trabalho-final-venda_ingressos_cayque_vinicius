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
      <a class="navbar-brand" href="#">Início</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="#teste">Em breve</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Ação</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Comédia</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Fantasia</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Romance</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Suspense</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Terror</a>
          </li>
        </ul>

        <div class="mt-2 mt-md-0">
          @if (Auth::guest())
            <a href="/login" class="btn btn-outline-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Fazer Login</a>
            <a href="/register" class="btn btn-outline-warning"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastrar</a>
          @else

            <label for="" class="text-muted" id="tituloinicio"><strong>Seja bem-vindo(a),</strong>{{ Auth::user()->name }}.  </label>
            <a href="#" class="btn btn-outline-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ver meu carrinho</a>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Sair</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

          @endif
        </div>

      </div>

    </nav>

    @yield('conteudo')

  </body>
</html>
