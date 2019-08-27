@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<h3>Produto</h3>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Produto</th>
        <th scope="col">Codigo idenficador</th>
        <th scope="col">Descrição</th>
      </tr>
    </thead>
    <tbody>
        
      <tr>
        <th scope="row">1</th>
        <td>{{ $produtos[0]->codigo_barra }}</td>
        <td>{{ $produtos[0]->produto_nome }}</td>
        <td>{{ $produtos[0]->descricao }}</td>
      </tr>
     
    </tbody>
</table>

<h3>Detalhes do Insumo Utilizado</h3> 
<table class="table table-striped">
    <thead>
        <tr>
            
                <th>Insumo Utilizado</th>
                <th>Quantidade Insumo</th>
                <th>Medida</th>
                <th>Preço por insumo</th>
                <th>Preço total insumo</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produtos as $produto)
        <tr>
                
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->quantidade }}</td>
                <td>{{ $produto->unidade_medida }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->quantidade * $produto->preco }}</td>
        </tr>
        @endforeach
      </tbody>
  </table>

<h3><b>Preço total: {{ $precoTotal }}</b></h3> 



@stop