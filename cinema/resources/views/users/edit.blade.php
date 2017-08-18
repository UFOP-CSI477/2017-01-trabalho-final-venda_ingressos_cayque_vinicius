@extends('cabecalho')

@section('conteudo')

<h3>Alterar o tipo de um usuário:</h3>

<form class="" action="/users/{{$user->id}}" method="post">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}



</form>

@endsection
