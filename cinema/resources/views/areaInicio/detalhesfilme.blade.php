@extends('areaInicio.cabecalho')

@section('conteudo')

<div id="backpagina">
  <div class="container" id="planofundo">
    <br>
    <div class="row">
      <div class="col-md-3">
        <img src="{{$filme->capa}}" alt="Capa" width="260" height="385">
      </div>
      <div class="col-md-9" id="titulo">
        <h1 class="text-left">{{$filme->nome}}</h1><br>
        <strong>Sinopse</strong><p class="text-justify">{{$filme->sinopse}}</p>

        <div class="row">
          <div class="col-md-4">
            <img src="https://png.icons8.com/theatre-mask/office/30" title="Theatre Mask" width="30" height="30">
            <strong>Gênero: </strong>{{$filme->genero}}
          </div>
          <div class="col-md-4">
            <img src="https://png.icons8.com/time/office/30" title="Time" width="30" height="30">
            <strong>Duração: </strong>{{$filme->duracao}}
          </div>
          <div class="col-md-4">
            <img src="https://png.icons8.com/hollywood-stars/office/30" title="Hollywood Stars" width="30" height="30">
            <strong>Diretor: </strong>{{$filme->diretor}}
          </div>
        </div><br>
        <div class="row">
          <div class="col-md-6">
            @if($filme->classificacao == 18)
              <img src="https://goo.gl/GhzVny" alt="" width="30" height="30">
              Não recomendado para menores de 18 anos
            @elseif($filme->classificacao == 16)
              <img src="https://goo.gl/Hcmi2y" alt="" width="30" height="30">
              Não recomendado para menores de 16 anos
            @elseif($filme->classificacao == 14)
              <img src="https://goo.gl/AcXkCc" alt="" width="30" height="30">
              Não recomendado para menores de 14 anos
            @elseif($filme->classificacao == 12)
              <img src="https://goo.gl/J5FBth" alt="" width="30" height="30">
              Não recomendado para menores de 12 anos
            @elseif($filme->classificacao == 10)
              <img src="https://goo.gl/nxfGaw" alt="" width="30" height="30">
              Não recomendado para menores de 10 anos
            @elseif($filme->classificacao == 0)
              <img src="https://goo.gl/D9xXJc" alt="" width="30" height="30">
              Livre para todos os públicos
            @endif
          </div>
          <div class="col-md-6">
            <img src="https://png.icons8.com/reality-stars/office/30" title="Reality Stars" width="30" height="30">
            <strong>Elenco: </strong>{{$filme->elenco}}
          </div>
        </div><br>

            @if($total > 0)
              <div class="row">
                <div class="col-md-8">
              <strong>Escolha uma sessão:</strong>
              <select class="form form-control" name="sessao">
                @foreach($sessoes as $s)
                <option value="{{$s->id}}">{{$s->data}} -- {{$s->hora}} -- R$ {{$s->preco}} --
                  Dublado:
                  @if($s->dublado == 0)
                  Não
                  @else
                  Sim
                @endif
                -- Legendado:
                @if($s->legendado == 0)
                Não
                @else
                Sim
              @endif
              </option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <strong>Quantidade de ingressos: </strong>
                <input type="number" class="form-control" name="quantidade" min="1" max="10" value="1">
            </div>
            </div>
          @else
            <h3 id="titulo">Disponível em breve</h3>
          @endif

        <br>
        <div class="row">
          @if (Auth::guest())
            <p>&nbsp;&nbsp;Para adquirir um ingresso, efetue <a href="/login">login</a> ou <a href="/register"> registre-se</a>.</p>
          @elseif($total > 0)
            <div class="col-md-12" align="right">
              <a href="#" class="btn btn-success text-center"><i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i> Adicionar ao carrinho</a>
            </div>
          @endif

        </div>

        <br>
        <strong>Veja o trailer:</strong><br><br>
        <iframe width="560" height="315" src= "{{$filme->trailer}}" frameborder="0" allowfullscreen></iframe>

      </div>
    </div>

  </div>


</div>
