@extends('cabecalho')

@section('conteudo')

<div class="container">
  <h3>Filmes na sessão de próximos</h3><br>
  <p>Insira aqui quais filmes você deseja que o site exiba na tela inicial. Cada linha da guia de
  próximos exibe seis filmes. Recomenda-se deixar nesta seção um número múltiplo de 6.</p>

  <a href="/proximos/create" class="btn btn-success">Inserir</a>
  <a href="/areaadmin" class="btn btn-danger">Voltar ao menu principal</a><br><br>
  <table class="table table-condensed">
    <th>ID</th>
    <th>Filme</th>
    <th>Editar</th>
    <th>Excluir</th>
    @foreach($proximo as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->filme->nome}}</td>
      <td><a href="/proximos/{{ $p->id }}/edit"class="btn btn-info"><i class="fa fa-pencil"></i> Editar</a></td>
      <td><a href="/proximos/{{ $p->id }}/" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</a></td>
    </tr>
    @endforeach
  </table>
</div>


@endsection
