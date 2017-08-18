@extends('cabecalho')

@section('conteudo')

<h3>Alterar o tipo de um usuário:</h3>

<table class="table table-condensed">
  <th>ID</th>
  <th>Nome</th>
  <th>Tipo</th>
  <th>Alterar</th>
  @foreach($user as $u)
  <tr>
    <td>{{ $u->id }}</td>
    <td>{{ $u->name }}</td>
    @if($u->type == 1)
      <td>1-Cliente</td>
    @else($u->type == 2)
      <td>2-Admnistrador</td>
    @endif
    <td><a href="/users/{{$u->id}}/edit" class="btn btn-info">Alterar</a></td>
  </tr>
  @endforeach
</table>

@endsection
