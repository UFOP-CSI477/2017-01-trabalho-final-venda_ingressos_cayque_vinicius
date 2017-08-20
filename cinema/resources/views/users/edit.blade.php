@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Alterar o tipo de um usuário</h3><br>
  <p>Neste sistema, os usuários são identificados com dois tipos: Administrador ou cliente. Aqui, você poderá "promover" ou "rebaixar" um cliente para administrador e vice-versa.</p>

  <form class="" action="/users/{{$user->id}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="row">
      <div class="col-md-6">
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
      </div>
      <div class="col-md-6">
        <select class="form-control" name="type">
          <option value="">Selecione...</option>
          <option value="1">Cliente</option>
          <option value="2">Administrador</option>
        </select>
      </div>
    </div>


<br>
    <input type="submit" name="" value="Salvar" class="btn btn-success">
    <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>
  </form>
</div>



@endsection
