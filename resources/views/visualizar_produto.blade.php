@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')


<table class="table table-striped">
    <thead>
      <tr>
              <th>Id</th>
              <th>Código de barras</th>
              <th>Quantidade</th>
              <th>Preço por unidade</th>
              <th>Descriçao</th>
              <th>Preço Total</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produtos as $produto)
              <td scope="row">1</td>
              <td>{{ $produto->codigo_barra }}</td>
              <td>{{ $produto->quantidade }}</td>
              <td>{{ $produto->preco }}</td>
              <td>{{ $produto->descricao }}</td>
              <td>{{ $precoTotal }}</td>
      @endforeach
    </tbody>
</table>

<h1>User Profile Data</h1>
<table class="table table-striped">
    <tr>
        <th><strong> Name: </strong></th>
        <td> John </td>
        <td> Joane </td>
    </tr>
    <tr>
        <th><strong> Surname: </strong></th>
        <td> Doe </td>
        <td> Donald </td>
    </tr>
    <tr>
        <th><strong> Email: </strong></th>
        <td> john.doe@email.com </td>
        <td> jane@email.com </td>
    </tr>
</table>
@stop