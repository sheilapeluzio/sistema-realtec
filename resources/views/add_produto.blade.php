@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Cadastrar novo Produto</h1>
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
      <form style="width:40%;"  method="post" action="{{ route('post_produto') }}">
          @csrf

          <div class="form-group">
              <label for="codigo_barra">Codigo de barras identificador:</label>
              <input type="text" class="form-control" name="codigo_barra">
          </div> 

          <div class="form-group">
              <label for="nome">Nome produto:</label>
              <input type="text" class="form-control" name="nome">
          </div>

          <div class="form-group">
              <label for="descricao">Descricao:</label>
              <input type="text" class="form-control" name="descricao">
          </div>

          <div class="form-group">   
            <label for="insumo">Qual insumo deseja utilizar:</label>
            <select name="insumo" id="insumo" class="form-control">
              <option value=""> -- Selecione insumo --</option>
              @foreach ($insumos as $insumo)
                <option value="{{ $insumo->id }}">{{ $insumo->nome }}</option>
              @endforeach 
            </select>
          </div>


          <div class="form-group">
              <label for="quantidade">Quantidade de Insumo:</label>
              <input type="text" class="form-control" name="quantidade">
          </div>

                        
          <button type="submit" class="btn btn-primary-outline">Enviar</button>
      </form>
  </div>
</div>
</div>
@stop