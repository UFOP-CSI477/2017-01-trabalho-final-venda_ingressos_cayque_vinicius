@extends('cabecalho')

@section('conteudo')

<h3>Todos Filmes da Base de Dados:</h3>

<table class="table table-condensed">
  <th>ID</th>
  <th>Nome</th>
  <th>Gênero</th>
  <th>Duração</th>
  <th>Sinopse</th>
  <th>Elenco</th>
  <th>Diretor</th>
  <th>Classificação</th>
  <th>Capa</th>
  <th>Trailer</th>
  <th>Editar</th>
  <th>Excluir</th>
  @foreach($filmes as $f)
  <tr>
    <td>{{ $f->id }}</td>
    <td>{{ $f->nome }}</td>
    <td>{{ $f->genero }}</td>
    <td>{{ $f->duracao }}</td>
    <td>{{ $f->sinopse }}</td>
    <td>{{ $f->elenco }}</td>
    <td>{{ $f->diretor }}</td>
    <td>{{ $f->classificacao }}</td>
    <td>{{ $f->capa }}</td>
    <td>{{ $f->trailer }}</td>
    <td><a href="/filmes/{{ $f->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
    <td><a href="/filmes/{{ $f->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
  </tr>
  @endforeach
</table>
@endsection
