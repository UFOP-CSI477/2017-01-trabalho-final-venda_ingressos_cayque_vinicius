@extends('cabecalho')

@section('conteudo')

<h3>Imagens do Banner:</h3><br>

<a href="/banners/create" class="btn btn-success">Inserir</a>
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

@endsection
