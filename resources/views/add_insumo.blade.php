@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Cadastrar novo Insumo</h1>
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
      <form style="width:40%;"  method="post" action="{{ route('post_insumo') }}">
          @csrf
          <div class="form-group">    
              <label for="nome">Nome do Insumo:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>

          <div class="form-group">
              <label for="unidade_medida">Unidade de Medida:</label>
              <select class="form-control" name="unidade_medida">
                <option selected>Escolher...</option>
                <option>gramas</option>
                <option>kilogramas</option>
                <option>saca</option>
                <option>arroba</option>
                <option>tonelada</option>
              </select>
              
          </div>

          <div class="form-group">
              <label for="data_validade">Data de validade:</label>
              <input type="date" name="data_validade">
          </div>
          <div class="form-group">
              <label for="preco">Preço:</label>
              <input type="text" class="form-control" name="preco"/>
          </div>                        
          <button type="submit" class="btn btn-primary-outline">Enviar</button>
      </form>
  </div>
</div>
</div>
@stop