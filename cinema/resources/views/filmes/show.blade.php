@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Excluir Filme</h3>

  <div class="row">
    <div class="col-md-6">
      <img src="{{$filmes->capa}}" width="260" height="385" alt="">
    </div>
    <div class="col-md-6">
      <h4>{{ $filmes->nome }}</h4>

      <form method="post" action="/filmes/{{ $filmes->id }}">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <br><input type="submit" value="Confirmar exclusão" class="btn btn-success">
        <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>

      </form>

    </div>
  </div>
  <br><br>


</div>


@endsection
