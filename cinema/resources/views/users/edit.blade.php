@extends('cabecalho')

@section('conteudo')

<h3>Alterar o tipo de um usuário:</h3>

<form class="" action="/users/{{$user->id}}" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  <input type="text" name="id" value="{{$user->id}}">
  <input type="text" name="name" value="{{$user->name}}">
  <select class="" name="type">
    <option value="">Selecione...</option>
    <option value="1">Cliente</option>
    <option value="2">Administrador</option>
  </select>
  <input type="submit" name="" value="Salvar">
</form>

@endsection
