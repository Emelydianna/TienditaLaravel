@extends('layouts.app')
@section('title','TIENDITA')
@section('content')
<br>
<div class="card mx-auto p-2" style="width: 95%">
    <div class="card-header">
      <h1>EDITAR PRODUCTO</h1>
    </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <form class="row g-3 needs-validation" method="post" action="{{url('productos/'.$productos->codigo)}}">
          @method("PUT")
          @csrf
            <div class="col-md-4">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="{{$productos->nombre}}" required>
              
            </div>

            <div class="col-md-4">
                <label for="precio" class="form-label">Precio:</label>
                <input type="text" class="form-control " id="precio" name="precio" value="{{$productos->precio}}" required>
            </div>
              
            <div class="col-md-4 position-relative">
              <label for="marca" class="form-label"><h6>Marca:</h6></label>
              <select class="form-select" id="marca" name="marca" value="{{old('marca')}}" required>
                <option>Selecciona</option>
                @foreach ($marcas as $poli)
                <option value="{{$poli->codigo}}" @if ($poli->codigo == $productos->marca){{'selected'}} @endif>{{$poli->nombre}}</option>
                @endforeach
              </select>
          </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">editar</button>
            </div>
        </form>

      </blockquote>
    </div>
  </div>
@endsection

