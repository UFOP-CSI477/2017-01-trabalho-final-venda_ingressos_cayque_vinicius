@extends('cabecalho')

@section('conteudo')

<h3>Todas Sessões da Base de Dados:</h3>

<table class="table table-condensed">
  <th>ID</th>
  <th>Filme</th>
  <th>Dublado</th>
  <th>Legendado</th>
  <th>Data</th>
  <th>Hora</th>
  <th>Local</th>
  <th>Preço</th>
  <th>Editar</th>
  <th>Excluir</th>
  @foreach($sessao as $s)
  <tr>
    <td>{{ $s->id }}</td>
    <td>{{ $s->filme->nome }}</td>
    @if ($s->dublado == true)
      <td>Sim</td>
    @else
      <td>Não</td>
    @endif
    @if ($s->legendado == true)
      <td>Sim</td>
    @else
      <td>Não</td>
    @endif
    <td>{{ $s->data }}</td>
    <td>{{ $s->hora }}</td>
    <td>{{ $s->local}}</td>
    <td>{{ $s->preco}}</td>
    <td><a href="/sessaos/{{ $s->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
    <td><a href="/sessaos/{{ $s->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
  </tr>
  @endforeach
</table>
@endsection
