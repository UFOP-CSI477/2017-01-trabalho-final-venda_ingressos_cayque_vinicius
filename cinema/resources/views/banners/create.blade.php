@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Inserir Banner</h3>
  <p>A página inicial do site conta com um carrossel de até 3 banners. Recomenda-se que esta lista fique apenas com 3 registros.</p>
  <form class="" action="/banners" method="post">

    {{ csrf_field() }}

    <fieldset>
      <legend>Escolha o Banner:</legend>
      <div class="row">
        <div class="col-md-12">
          <label for="filme_id">Imagem:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
            <input type="text" name="imagem" value="" class="form-control">
          </div>
        </div>

      </div>
    </fieldset>
    <br><input type="submit" value="Cadastrar" class="btn btn-success">
    <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>
  </form>
</div>

@endsection
