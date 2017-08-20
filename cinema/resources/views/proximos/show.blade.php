@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Remover filme da sessão de próximos</h3>

  <div class="row">
    <div class="col-md-6">
      <img src="{{$proximo->filme->capa}}" width="260" height="385" alt="">
    </div>
    <div class="col-md-6">
      <br><br><br><br>
      <h4>Nome do filme: {{ $proximo->filme->nome }}</h4>
      <form method="post" action="/proximos/{{ $proximo->id }}">

        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <br><input type="submit" value="Confirmar remoção" class="btn btn-success">
        <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>

      </form>
    </div>
  </div>
  <br><br>


</div>


@endsection
