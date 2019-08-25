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
              <label for="nome">Nome do Produto:</label>
              <input type="text" class="form-control" name="nome"/>
          </div>


          <div class="form-group">
              <label for="descricao">Descricao:</label>
              <input type="text" class="form-control" name="descricao">
          </div>
                                
          <button type="submit" class="btn btn-primary-outline">Enviar</button>
      </form>
  </div>
</div>
</div>
@stop