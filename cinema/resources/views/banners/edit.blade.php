@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Editar Banner</h3><br>
  <p>A página inicial do site conta com um carrossel de até 3 banners. Recomenda-se que esta lista fique apenas com 3 registros.</p>
  <form class="" action="/banners/{{$banner->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <fieldset>
      <legend>Escolha o Banner:</legend>
      <div class="row">
        <div class="col-md-12">
          <label for="filme_id">Imagem:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
            <input type="text" name="imagem" class="form-control" value="{{$banner->imagem}}">
          </div>
        </div>

      </div>
    </fieldset>
    <br><input type="submit" value="Cadastrar" class="btn btn-success">
    <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>
  </form>
</div>

@endsection
