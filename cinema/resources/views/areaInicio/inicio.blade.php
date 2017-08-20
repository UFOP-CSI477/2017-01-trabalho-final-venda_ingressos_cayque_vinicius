@extends('areaInicio.cabecalho')

@section('conteudo')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="/img/inicio.png" alt="First slide">
    </div>

    @foreach($banners as $b)
      <div class="carousel-item">
        <img class="first-slide" src="{{$b->imagem}}" alt="First slide">
      </div>
    @endforeach
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>

  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<div class="container marketing">
  <h1 class="text-center" id="titulos">COMO FUNCIONA?</h1><br>
  <div class="row">

    <div class="col-lg-4">
      <img src="https://png.icons8.com/under-computer/color/96" title="Under Computer" width="90" height="90">
      <h3 id="subtitulos">Cadastre-se</h3>
      <p id="conteudo">Cadastre-se no site ou entre com os seus dados já cadastrados e veja a lista de filmes disponíveis em nossa rede de cinemas.
         Os filmes estão separados por categorias que podem ser acessadas pelo menu acima.</p>
    </div>

    <div class="col-lg-4">
      <img src="https://png.icons8.com/film-reel/color/96" title="Film Reel" width="90" height="90">
      <h3 id="subtitulos">Escolha o filme e a sessão</h3>
      <p id="conteudo">Depois de escolher o filme, selecione a quantidade de ingressos que deseja reservar e a sessão.
        Com isso, o seu ingresso já estará reservado e você evitará de chegar ao cinema e encontrar a sessão esgotada.
      </p>
    </div>

    <div class="col-lg-4">
      <img src="https://png.icons8.com/giving-tickets/color/96" title="Giving Tickets" width="90" height="90">
      <h3 id="subtitulos">Divirta-se</h3>
      <p id="conteudo">No UFOPMovieTickets você só paga o ingresso na entrada do cinema. Imprima o voucher gerado para os seus ingressos e os
        retire momentos antes do filme começar.
      </p>
    </div>
  </div>
</div>


<hr class="featurette-divider">
  <h1 class="text-center" id="titulos">EM BREVE</h1><br>
  <div class="row">
    @foreach($proximos as $p)
      <div class="col-md-2" align="center">
        <img src="{{$p->filme->capa}}" alt="" width="130" height="192">
        <br><br>
        <p id="conteudo"><strong>{{$p->filme->nome}}</strong><br></p>
        <p><a class="btn btn-secondary" href="/detalhes/{{$p->filme->id}}" role="button">Ver detalhes &raquo;</a></p>
      </div>
    @endforeach
  </div>

<hr class="featurette-divider">
  <h1 class="text-center" id="titulos">ENCONTRE O CINEMA MAIS PERTO</h1><br>
  <div align="center">
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">https://embedgooglemaps.com/pt/</a></small></div><div><small><a href="http://www.genkigirl.net/">best alternatives for forex bot</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(-19.828592385482583,-43.16551652404672),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-19.828592385482583,-43.16551652404672)});infowindow = new google.maps.InfoWindow({content:'<strong>R. Trinta e Seis, 115 - Loanda, João Monlevade - MG, 35931-008</strong><br>R. Trinta e Seis, 115 - Loanda, João Monlevade - MG, 35931-008<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
  </div>
  <br><br>
@endsection
