@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Inserir Nova Sessão:</h3>
  <form class="" action="/sessaos" method="post">

    {{ csrf_field() }}

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
            <input type="text" name="data" placeholder="dd/mm/aaaa">
          </div>
        </div>
        <div class="col-md-3">
          <label for="hora">Hora:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input type="text" name="hora" placeholder="hh:mm:ss">
          </div>
        </div>
        <div class="col-md-3">
          <label for="local">Local:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input type="text" name="local" placeholder="Digite o local da sessão...">
          </div>
        </div>
        <div class="col-md-3">
          <label for="preco">Preço:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <input type="text" name="preco" placeholder="Digite o preço da sessão...">
          </div>
        </div>
      </div>
      </fieldset>
      <br><input type="submit" value="Cadastrar" class="btn btn-success">
      <input type="reset" value="Limpar todos os campos" class="btn btn-danger">
    </div>
  </form>

</div>

@endsection
