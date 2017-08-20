@extends('areaInicio.cabecalho')

<div id="backpagina">
  <div class="container" id="planofundo">
    <br><br>
    <div class="row">
      <img src="https://png.icons8.com/shopping-cart/color/48" title="Shopping Cart" width="48" height="48">
      <h1 id="titulo"> Meu carrinho</h1><br><br><br>
    </div>
  </div>

    @if($total <= 0)
      <div class="container" id="fundobranco" align="center">
        <br><br><br><br>
        <img src="https://png.icons8.com/delete-ticket/color/96" title="Delete Ticket" width="96" height="96">
        <h1 id="titulo">O seu carrinho está vazio!</h1><br>
        <h2 id="titulo">Escolha uma das categorias acima e reserve os seus ingressos.</h2>
        <br><br><br><br>
      </div>
      <div class="container" id="planofundo">
        <br><br><br><br>
      </div>

    @endif


</div>
