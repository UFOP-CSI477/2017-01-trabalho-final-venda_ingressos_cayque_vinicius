@extends('areaInicio.cabecalho')

@section('conteudo')

  <div id="backpagina">
    <br><br><br><br>
    <div class="container" id="planofundo">
      <br>
      <div class="row">
        <img src="https://png.icons8.com/cancel/color/48" title="Cancel" width="48" height="48">
        <h1 id="titulo">Confirmar exclusão da compra</h1>
      </div>

      <form class="" action="/carrinho/{{$carrinho->id}}" method="post">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <label for=""><strong>Nome do filme: </strong>{{$carrinho->sessao->filme->nome}}</label><br>
        <label for=""><strong>Horário da sessão: </strong>{{$carrinho->sessao->hora}}</label><br>
        <label for=""><strong>Data da sessão: </strong>{{$carrinho->sessao->data}}</label><br>
        <label for=""><strong>Local: </strong>{{$carrinho->sessao->local}}</label><br>
        <label for=""><strong>Preço unitário: </strong>R$ {{$carrinho->sessao->preco}}</label><br>
        <label for=""><strong>Quantidade de ingressos: </strong>{{$carrinho->sessao->quantidade}}</label><br>
        <label for=""><strong>Dublado: </strong>
          @if($carrinho->sessao->dublado == 1)
            Sim
          @else
            Não
          @endif
        </label><br>
        <label for=""><strong>Legendado: </strong>
          @if($carrinho->sessao->legendado == 1)
            Sim
          @else
            Não
          @endif
        </label><br>


        <div align="right">
          <br><a href="/carrinho" class="btn btn-danger">Voltar</a>
          <input type="submit" name="" class="btn btn-success" value="Confirmar exclusão &rsaquo;">
        </div>
        <br>


      </form>

    </div>
    <div id="backpagina">
      <br><br><br><br>
    </div>



  </div>

@endsection
