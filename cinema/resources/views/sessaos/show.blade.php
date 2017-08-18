@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Excluir Sessão</h3>

  <div class="row">
    <div class="col-md-6">
      <img src="{{$sessao->filme->capa}}" width="260" height="385" alt="">
    </div>
    <div class="col-md-6">
      <h2>{{ $sessao->filme->nome }}</h2>
    </div>
  </div>

  <form method="post" action="/sessaos/{{ $sessao->id }}">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <br><input type="submit" value="Confirmar exclusão" class="btn btn-success">

  </form>
</div>


@endsection
