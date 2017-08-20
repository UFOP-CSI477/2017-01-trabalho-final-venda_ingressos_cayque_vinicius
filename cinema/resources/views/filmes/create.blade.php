@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Inserir Novo Filme:</h3>
  <form class="" action="/filmes" method="post">

    {{ csrf_field() }}

    <fieldset>
      <legend>Dados do filme</legend>
      <label for="nome">Nome:</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
        <input type="text" class="form-control" name="nome" placeholder="Nome do filme...">
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="genero">Genêro:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
            <select class="form-control" name="genero">
              <option value="">Selecione...</option>
              <option value="Ação">Ação</option>
              <option value="Comédia">Comédia</option>
              <option value="Romance">Romance</option>
              <option value="Fantasia">Animação</option>
              <option value="Terror">Terror</option>
              <option value="Suspense">Suspense</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <label for="genero">Duração:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            <input type="text" class="form-control" name="duracao" placeholder="hh:mm:ss">
          </div>
        </div>
      </div>
      <label for="sinopse">Sinopse:</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
        <input type="text" class="form-control" name="sinopse" placeholder="Sinopse do filme...">
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="elenco">Elenco:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="elenco" placeholder="Elenco do filme...">
          </div>
        </div>
        <div class="col-md-6">
          <label for="diretor">Diretor:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="diretor" placeholder="Nome do diretor...">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="classificacao">Classificação:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
            <select class="form-control" name="classificacao">
              <option value="">Escolha...</option>
              <option value="0">L - Livre</option>
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
            <input type="text" class="form-control" name="capa" placeholder="Link da capa do filme...">
          </div>
        </div>
        <div class="col-md-4">
          <label for="capa">Trailer:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-hd-video"></i></span>
            <input type="text" class="form-control" name="trailer" placeholder="Link do trailer do filme...">
          </div>
        </div>
      </div>
    </fieldset>
    <br>
    <input type="submit" value="Cadastrar" class="btn btn-success">
    <input type="reset" value="Limpar todos os campos" class="btn btn-info">
    <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>
    <br><br>
  </form>
</div>

@endsection
