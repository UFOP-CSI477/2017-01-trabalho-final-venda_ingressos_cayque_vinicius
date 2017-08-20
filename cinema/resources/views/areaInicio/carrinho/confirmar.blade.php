@extends('areaInicio.cabecalho')

@section('conteudo')

  <div id="backpagina">
    <br><br><br><br>
    <div class="container" id="planofundo">
      <br>
      <div class="row">
        <img src="https://png.icons8.com/task-completed/color/48" title="Task Completed" width="48" height="48">
        <h1 id="titulo">Confirmar dados</h1>
      </div>

      <form class="" action="/carrinho/adicionar/{{$dados->sessao_id}}" method="post">

        {{csrf_field()}}

        <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <input type="hidden" name="sessao_id" value="{{$dados->sessao_id}}">
        <input type="hidden" name="quantidade" value="{{$dados->quantidade}}">

        <label for=""><strong>Nome do filme: </strong>{{$dado->filme->nome}}</label><br>
        <label for=""><strong>Horário da sessão: </strong>{{$dado->hora}}</label><br>
        <label for=""><strong>Data da sessão: </strong>{{$dado->data}}</label><br>
        <label for=""><strong>Local: </strong>{{$dado->local}}</label><br>
        <label for=""><strong>Preço unitário: </strong>R$ {{$dado->preco}}</label><br>
        <label for=""><strong>Quantidade de ingressos: </strong>{{$dados->quantidade}}</label><br>
        <label for=""><strong>Dublado: </strong>
          @if($dado->dublado == 1)
            Sim
          @else
            Não
          @endif
        </label><br>
        <label for=""><strong>Legendado: </strong>
          @if($dado->legendado == 1)
            Sim
          @else
            Não
          @endif
        </label><br>
        <div align="right">
          <br><a href="/" class="btn btn-danger">Voltar</a>
          <input type="submit" name="" class="btn btn-success" value="Confirmar &rsaquo;">
        </div>
        <br>


      </form>

    </div>
    <div id="backpagina">
      <br><br><br><br>
    </div>



  </div>

@endsection
