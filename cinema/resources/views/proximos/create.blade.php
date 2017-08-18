@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Inserir Filme no Banner de Próximos</h3>
  <form class="" action="/proximos" method="post">

    {{ csrf_field() }}

    <fieldset>
      <legend>Escolha o filme:</legend>
      <div class="row">
        <div class="col-md-12">
          <label for="filme_id">Filme:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <select class="" name="filme_id">
              <option value="">Selecione...</option>
              @foreach($filme as $f)
                <option value="{{$f->id}}">{{$f->nome}}</option>
              @endforeach
            </select>
          </div>
        </div>

      </div>
    </fieldset>
    <br><input type="submit" value="Cadastrar" class="btn btn-success">
  </form>
</div>

@endsection
