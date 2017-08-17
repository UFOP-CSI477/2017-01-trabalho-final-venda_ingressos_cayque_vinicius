@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Editar Filme</h3>
  <form class="" action="/filmes/{{ $filmes->id }}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <fieldset>
      <legend>Dados do filme</legend>
      <label for="nome">Nome:</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
        <input type="text" class="form-control" name="nome" value="{{ $filmes->nome}}">
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="genero">Genêro:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <input type="text" class="form-control" name="genero" value="{{ $filmes->genero}}">
          </div>
        </div>
        <div class="col-md-6">
          <label for="genero">Duração:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            <input type="text" class="form-control" name="duracao" value="{{ $filmes->duracao}}">
          </div>
        </div>
      </div>
      <label for="sinopse">Sinopse:</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
        <input type="text" class="form-control" name="sinopse" value="{{ $filmes->sinopse}}">
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="elenco">Elenco:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="elenco" value="{{ $filmes->elenco}}">
          </div>
        </div>
        <div class="col-md-6">
          <label for="diretor">Diretor:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="diretor" value="{{ $filmes->diretor}}">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="classificacao">Classificação:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
            <select class="" name="classificacao">
              <option value="">Selecione...</option>
              <option value="L">L - Livre</option>
              <option value="10">10 - Não recomendado para menores de 10 anos</option>
              <option value="12">12 - Não recomendado para menores de 12 anos</option>
              <option value="14">14 - Não recomendado para menores de 14 anos</option>
              <option value="16">16 - Não recomendado para menores de 16 anos</option>
              <option value="18">18 - Não recomendado para menores de 18 anos</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <label for="capa">Capa:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
            <input type="text" class="form-control" name="capa" value="{{ $filmes->capa}}">
          </div>
        </div>
        <div class="col-md-4">
          <label for="capa">Trailer:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-hd-video"></i></span>
            <input type="text" class="form-control" name="trailer" value="{{ $filmes->trailer}}">
          </div>
        </div>
      </div>
    </fieldset>
    <input type="submit" value="Confirmar" class="btn btn-success">
    <input type="reset" value="Limpar todos os campos" class="btn btn-danger">
  </form>
</div>

@endsection
