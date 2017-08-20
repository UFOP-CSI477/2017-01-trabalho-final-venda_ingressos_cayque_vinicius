@extends('areaInicio.cabecalho')

@section('conteudo')

  <div id="backpagina">
    <div class="container" id="planofundo">
      <h1 id="titulo">Confirmar dados</h1>

      <form class="" action="/carrinho/adicionar/{{$dados->sessao_id}}" method="post">

        {{csrf_field()}}

        <input type="hidden" name="user_id" value="{{Auth::id()}}">
        <input type="hidden" name="sessao_id" value="{{$dados->sessao_id}}">
        <input type="hidden" name="quantidade" value="{{$dados->quantidade}}">

        <label for=""><strong>Nome do filme: </strong>{{$dado->filme->nome}}</label>
        <label for=""><strong>Quantidade: </strong>{{$dados->quantidade}}</label>

        <input type="submit" name="" value="Enviar">
      </form>

    </div>



  </div>

@endsection
