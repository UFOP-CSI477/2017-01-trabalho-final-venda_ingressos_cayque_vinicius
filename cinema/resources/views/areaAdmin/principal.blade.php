@extends('cabecalho')

@section('conteudo1')
  <h3>Personalização da tela inicial</h3>
  <div class="col-md-3" align="center" id="selecionado">
    <img src="https://png.icons8.com/documentary/color/96" title="Documentary" width="96" height="96">
    <a href="#"><h4>Adicionar próximos lançamentos</h4></a>
    <p>Selecione quais filmes irão aparecer<br>na sessão de próximos lançamentos<br>na página inicial do site.</p>
  </div>

  <div class="col-md-3" align="center" id="selecionado">
    <img src="https://png.icons8.com/movie/color/96" title="Movie" width="96" height="96">
    <h4>Alterar os banners da<br>página inicial</h4>
    <p>Altere os banners que são<br>exibidos no carousel da página inicial.</p>
  </div>
@endsection
