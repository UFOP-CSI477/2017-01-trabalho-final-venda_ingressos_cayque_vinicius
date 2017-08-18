@extends('cabecalho')

@section('conteudo')

<h3>Filmes no banner de próximos:</h3><br>

<a href="/proximos/create" class="btn btn-success">Inserir</a>
<table class="table table-condensed">
  <th>ID</th>
  <th>Filme</th>
  <th>Editar</th>
  <th>Excluir</th>
  @foreach($proximo as $p)
  <tr>
    <td>{{$p->id}}</td>
    <td>{{$p->filme->nome}}</td>
    <td><a href="/proximos/{{ $p->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
    <td><a href="/proximos/{{ $p->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
  </tr>
  @endforeach
</table>

@endsection
