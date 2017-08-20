@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Inserir Filme na sessão de Próximos</h3>
  <p>Insira aqui quais filmes você deseja que o site exiba na tela inicial. Cada linha da guia de
  próximos exibe seis filmes. Recomenda-se deixar nesta seção um número múltiplo de 6.</p>
  <form class="" action="/proximos" method="post">

    {{ csrf_field() }}

    <fieldset>
      <legend>Escolha o filme:</legend>
      <div class="row">
        <div class="col-md-12">
          <label for="filme_id">Filme:</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-film"></i></span>
            <select class="form-control" name="filme_id">
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
    <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a>
  </form>
</div>

@endsection
