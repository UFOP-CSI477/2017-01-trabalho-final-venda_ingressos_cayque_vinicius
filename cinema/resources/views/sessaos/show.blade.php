@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Excluir Sessão</h3>

  <div class="row">
    <div class="col-md-6">
      <img src="{{$sessao->filme->capa}}" width="260" height="385" alt="">
    </div>
    <div class="col-md-6">
      <h4>{{ $sessao->filme->nome }}</h4>
      <form method="post" action="/sessaos/{{ $sessao->id }}">

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
