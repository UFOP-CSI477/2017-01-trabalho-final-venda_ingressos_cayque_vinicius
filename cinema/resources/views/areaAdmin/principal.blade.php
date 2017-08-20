@extends('cabecalho')

@section('conteudo')
  <div id="navbar">
    <div class="container" >
      <ul class="nav nav-pills nav-tabs" id="teste">
        <li class="active"><a data-toggle="pill" href="#home">Início</a></li>
        <li><a data-toggle="pill" href="#menu1">Personalização da tela inicial</a></li>
        <li><a data-toggle="pill" href="#menu2">Filmes</a></li>
        <li><a data-toggle="pill" href="#menu3">Sessões</a></li>
        <li><a data-toggle="pill" href="#menu4">Usuários</a></li>
        <li><a href="/">Ir para o site</a></li>
      </ul>
    </div>
  </div>

  <div>
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
          <h3>Personalização da tela inicial</h3>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/proximos"><img src="https://png.icons8.com/documentary/color/96" title="Documentary" width="96" height="96"></a>
            <h4>Adicionar próximos lançamentos</h4>
            <p>Selecione quais filmes irão aparecer<br>na sessão de próximos lançamentos<br>na página inicial do site.</p>
          </div>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/banners"><img src="https://png.icons8.com/movie/color/96" title="Movie" width="96" height="96"></a>
            <h4>Alterar os banners da<br>página inicial</h4>
            <p>Altere os banners que são<br>exibidos no carousel da página inicial.</p>
          </div>
        </div>

        <div id="menu2" class="tab-pane fade">
          <h3>Filmes</h3>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/filmes/create"><img src="https://png.icons8.com/add-to-favorites/color/96" title="Add Database" width="96" height="96"></a>
            <h4>Adicionar novo filme</h4>
            <p>Adicione informações<br>de um novo filme na base de dados.</p>
          </div>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/filmes"><img src="https://png.icons8.com/no-edit/color/96" title="No Edit" width="96" height="96"></a>
            <h4>Editar/Excluir filme</h4>
            <p>Edite ou exclua as informações<br>de um filme cadastrado.</p>
          </div>
        </div>

        <div id="menu3" class="tab-pane fade">
          <h3>Sessões</h3>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/sessaos/create"><img src="https://png.icons8.com/starred-ticket/color/96" title="Starred Ticket" width="96" height="96"></a>
            <h4>Cadastrar nova sessão</h4>
            <p>Adicione uma nova<br>sessão de exibição para um determinado filme.</p>
          </div>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/sessaos"><img src="https://png.icons8.com/video-editing/color/96" title="Video Editing" width="96" height="96"></a>
            <h4>Editar/Excluir sessão</h4>
            <p>Edite ou exclua as informações<br>de uma sessão cadastrada.</p>
          </div>
        </div>

        <div id="menu4" class="tab-pane fade">
          <h3>Usuários</h3>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/users/listar"><img src="https://png.icons8.com/user-menu-male/color/96" title="User Menu Male" width="96" height="96"></a>
            <h4>Alterar o tipo de um usuário</h4>
            <p>Torne um outro usuário administrador<br>alterando o seu código de tipo.</p>
          </div>

          <div class="col-md-3" align="center" id="selecionado">
            <a href="/users"><img src="https://png.icons8.com/user-manual/color/96" title="User Manual" width="96" height="96"></a>
            <h4>Listar usuários</h4>
            <p>Visualize uma lista com todos os usuários cadastrados no sistema.</p>
          </div>
        </div>

      </div>

    </div>

  </div>

@endsection
