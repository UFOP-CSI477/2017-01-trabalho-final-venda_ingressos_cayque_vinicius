@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Inserir Banner</h3>
  <form class="" action="/banners" method="post">

    {{ csrf_field() }}

    <fieldset>
      <legend>Escolha o Banner:</legend>
      <div class="row">
        <div class="col-md-12">
          <label for="filme_id">Imagem:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
            <input type="text" name="imagem" value="">
          </div>
        </div>

      </div>
    </fieldset>
    <br><input type="submit" value="Cadastrar" class="btn btn-success">
  </form>
</div>

@endsection
