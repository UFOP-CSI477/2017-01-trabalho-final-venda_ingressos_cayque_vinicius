@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Excluir Banner</h3><br>
  <p>A página inicial do site conta com um carrossel de até 3 banners. Recomenda-se que esta lista fique apenas com 3 registros.</p>
  <div class="col-md-6">
    <img src="{{$banner->imagem}}" alt="" width="50%">
  </div>

  <form method="post" action="/banners/{{ $banner->id }}">

    {{ csrf_field() }}
    {{ method_field('DELETE') }}

    <br><input type="submit" value="Confirmar exclusão" class="btn btn-success">
    <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>

  </form>
</div>


@endsection
