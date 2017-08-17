@extends('cabecalho')

@section('conteudo')

<h3>Todos Sessões da Base de Dados:</h3>

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
  @foreach
  <tr>
    <td></td>
  </tr>
  @endforeach
</table>

@endsection
