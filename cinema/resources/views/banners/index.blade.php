@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Imagens do Banner</h3><br>
  <p>A página inicial do site conta com um carrossel de até 3 banners. Recomenda-se que esta lista fique apenas com 3 registros.</p>
  <a href="/banners/create" class="btn btn-success">Inserir</a>
  <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a><br><br>
  <table class="table table-condensed">
    <th>ID</th>
    <th>Imagem</th>
    <th>Editar</th>
    <th>Excluir</th>
    @foreach($banner as $b)
    <tr>
      <td>{{$b->id}}</td>
      <td>{{$b->imagem}}</td>
      <td><a href="/banners/{{ $b->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
      <td><a href="/banners/{{ $b->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
    </tr>
    @endforeach
  </table>
</div>
@endsection
