@extends('cabecalho')

@section('conteudo')

<h3>Lista de Todos Usuários da Base de Dados:</h3>

<table class="table table-condensed">
  <th>ID</th>
  <th>Nome</th>
  <th>E-Mail</th>
  <th>Tipo</th>
  <th>CPF</th>
  <th>Estado</th>
  <th>Cidade</th>
  <th>Rua</th>
  <th>Numero</th>
  <th>CEP</th>
  @foreach($user as $u)
  <tr>
    <td>{{$u->id}}</td>
    <td>{{$u->name}}</td>
    <td>{{$u->email}}</td>
    @if($u->type == 1)
      <td>1-Cliente</td>
    @else($u->type == 2)
      <td>2-Admnistrador</td>
    @endif
    <td>{{$u->cpf}}</td>
    <td>{{$u->estado}}</td>
    <td>{{$u->cidade}}</td>
    <td>{{$u->rua}}</td>
    <td>{{$u->numero}}</td>
    <td>{{$u->cep}}</td>
  </tr>
  @endforeach
</table>
<div class="container" align="right">
  <br><a href="/" class="btn btn-info">Voltar</a>
</div>

@endsection
