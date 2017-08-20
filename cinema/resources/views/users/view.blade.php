@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Alterar o tipo de um usuário</h3><br>
  <p>Neste sistema, os usuários são identificados com dois tipos: Administrador ou cliente. Aqui, você poderá "promover" ou "rebaixar" um cliente para administrador e vice-versa.</p>
  <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a><br><br>

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
        <td>2-Administrador</td>
      @endif
      <td><a href="/users/{{$u->id}}/edit" class="btn btn-info">Alterar</a></td>
    </tr>
    @endforeach
  </table>
</div>



@endsection
