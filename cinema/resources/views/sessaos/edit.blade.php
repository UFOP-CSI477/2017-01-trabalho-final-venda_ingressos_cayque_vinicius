@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Editar Sessão</h3>
  <form class="" action="/sessaos/{{ $sessao->id }}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <fieldset>
      <legend>Dados da sessão:</legend>
      <div class="row">
        <div class="col-md-4">
          <label for="filme_id">Filme:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <select class="" name="filme_id">
              <option value="">Selecione...</option>
              @foreach($filme as $f)
                <option value="{{ $f->id }}">{{$f->nome}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <label for="dublado">Dublado:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <select class="" name="dublado">
              <option value="">Selecione...</option>
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <label for="legendado">Legendado:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <select class="" name="legendado">
              <option value="">Selecione...</option>
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label for="data">Data:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input type="text" name="data" value="{{ $sessao->data }}">
          </div>
        </div>
        <div class="col-md-3">
          <label for="hora">Hora:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input type="text" name="hora" value="{{ $sessao->hora }}">
          </div>
        </div>
        <div class="col-md-3">
          <label for="local">Local:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input type="text" name="local" value="{{ $sessao->local }}">
          </div>
        </div>
        <div class="col-md-3">
          <label for="preco">Preço:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input type="text" name="preco" value="{{ $sessao->preco }}">
          </div>
        </div>
      </div>
      </fieldset>
      <br><input type="submit" value="Confirmar" class="btn btn-success">
      <input type="reset" value="Limpar todos os campos" class="btn btn-danger">
  </form>
</div>
@endsection
