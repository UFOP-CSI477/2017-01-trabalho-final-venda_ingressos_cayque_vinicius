@extends('areaInicio.cabecalho')

@section('conteudo')
<div id="backpagina">
  <div class="container" id="planofundo">
    <br><br>

      @if($genero == "Ação")
      <div class="row">
        <img src="https://png.icons8.com/stick-fighting/color/48" title="Stick Fighting" width="48" height="48">
        <h1 id="titulofilmes"> Em cartaz &rsaquo; Filmes de <strong class="text-danger">Ação</strong></h1>
      </div>
      @elseif($genero == "Comédia")
      <div class="row">
        <img src="https://png.icons8.com/tongue-out/color/48" title="Tongue Out" width="48" height="48">
        <h1 id="titulofilmes"> Em cartaz &rsaquo; Filmes de <strong class="text-warning">Comédia</strong></h1>
      </div>
      @elseif($genero == "Animação")
      <div class="row">
        <img src="https://png.icons8.com/woody-woodpecker/color/48" title="Woody Woodpecker" width="48" height="48">
        <h1 id="titulofilmes"> Em cartaz &rsaquo; Filmes de <strong class="text-info">Animação</strong></h1>
      </div>
      @elseif($genero == "Romance")
      <div class="row">
        <img src="https://png.icons8.com/flower-bouquet/color/48" title="Flower Bouquet" width="48" height="48">
        <h1 id="titulofilmes"> Em cartaz &rsaquo; Filmes de <strong class="text-success">Romance</strong></h1>
      </div>
      @elseif($genero == "Suspense")
      <div class="row">
        <img src="https://png.icons8.com/film-noir/color/48" title="Film Noir" width="48" height="48">
        <h1 id="titulofilmes"> Em cartaz &rsaquo; Filmes de <strong class="text-danger">Suspense</strong></h1>
      </div>
      @elseif($genero == "Terror")
      <div class="row">
        <img src="https://png.icons8.com/jason-voorhees/color/48" title="Jason Voorhees" width="48" height="48">
        <h1 id="titulofilmes"> Em cartaz &rsaquo; Filmes de <strong class="text-danger">Terror</strong></h1>
      </div>
      @endif

      <br>
      <div class="row">
        @foreach($filmes as $f)
        <div class="col-md-3" align="center">
          <img src="{{$f->capa}}" alt="Capa do filme" width="130" height="192">
          @if($f->classificacao == 18)
            <p><img src="https://goo.gl/GhzVny" alt="" width="15" height="15">
          @elseif($f->classificacao == 16)
            <p><img src="https://goo.gl/Hcmi2y" alt="" width="15" height="15">
          @elseif($f->classificacao == 14)
            <p><img src="https://goo.gl/AcXkCc" alt="" width="15" height="15">
          @elseif($f->classificacao == 12)
            <p><img src="https://goo.gl/J5FBth" alt="" width="15" height="15">
          @elseif($f->classificacao == 10)
            <p><img src="https://goo.gl/nxfGaw" alt="" width="15" height="15">
          @elseif($f->classificacao == 0)
            <p><img src="https://goo.gl/D9xXJc" alt="" width="15" height="15">
          @endif
           {{$f->nome}}<br>
          <a class="btn btn-secondary" href="/detalhes/{{$f->id}}" role="button">Ver detalhes &raquo;</a></p>
        </div>
        @endforeach
      </div>

  </div>

</div>


@endsection
