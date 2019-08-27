@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')


<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h3 class="display-3">Cadastrar novo Produto</h3>
    <div>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div><br />
      @endif
      <form style="width:40%;" method="post" action="{{ route('post_produto') }}">
        @csrf

        <div class="form-group">
          <label for="codigo_barra">Codigo de barras identificador:</label>
          <input type="text" class="form-control" name="codigo_barra" required="">
        </div>

        <div class="form-group">
          <label for="nome">Nome produto:</label>
          <input type="text" class="form-control" name="nome" required="">
        </div>

        <div class="form-group">
          <label for="descricao">Descricao:</label>
          <input type="text" class="form-control" name="descricao" required="" >
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="insumo">Insumo utilizado:</label>
            <select name="insumo" id="insumo" class="form-control" required="">
              <option value=""> -Selecione insumo --</option>
              @foreach ($insumos as $insumo)
              <option value="{{ $insumo->id }}">{{ $insumo->nome }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group col-md-6">
          <label for="quantidade">Quantidade :</label>
          <input type="text" class="form-control" name="quantidade" required="">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="insumo1">Insumo utilizado:</label>
            <select name="insumo1" id="insumo1" class="form-control" >
              <option value=""> -Selecione insumo --</option>
              @foreach ($insumos as $insumo)
              <option value="{{ $insumo->id }}">{{ $insumo->nome }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group col-md-6">
          <label for="quantidade1">Quantidade :</label>
          <input type="text" class="form-control" name="quantidade1">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="insumo2">Insumo utilizado:</label>
            <select name="insumo2" id="insumo2" class="form-control" >
              <option value=""> -Selecione insumo --</option>
              @foreach ($insumos as $insumo)
              <option value="{{ $insumo->id }}">{{ $insumo->nome }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group col-md-6">
          <label for="quantidade2">Quantidade :</label>
          <input type="text" class="form-control" name="quantidade2">
          
        </div>



        <button type="submit" class="btn btn-primary-outline">Enviar</button>
      </form>
    </div>
  </div>
</div>
@stop