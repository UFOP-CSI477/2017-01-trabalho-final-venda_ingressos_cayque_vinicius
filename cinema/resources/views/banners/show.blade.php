@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Excluir Banner</h3>

  <p>{{$banner->imagem}}</p>

  <form method="post" action="/banners/{{ $banner->id }}">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <br><input type="submit" value="Confirmar exclusão" class="btn btn-success">

  </form>
</div>


@endsection
