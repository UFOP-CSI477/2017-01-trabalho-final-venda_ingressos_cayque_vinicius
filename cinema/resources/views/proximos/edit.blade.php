@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Editar filmes da sessão de Próximos</h3>
  <p>Insira aqui quais filmes você deseja que o site exiba na tela inicial. Cada linha da guia de
  próximos exibe seis filmes. Recomenda-se deixar nesta seção um número múltiplo de 6.</p>
  <form class="" action="/proximos/{{$proximo->id}}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

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
    <br><input type="submit" value="Confirmar" class="btn btn-success">
  </form>
</div>

@endsection
