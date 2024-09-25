@extends('layouts.app')
@section('title','TIENDITA')
@section('content')
<br>
<div class="card mx-auto p-2" style="width: 95%">
    <div class="card-header">
      <h1>NUEVA CATEGORIA</h1>
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
        <form class="row g-3 needs-validation" method="post" action="{{url('categorias')}}">
          @csrf
            <div class="col-md-4">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
              
            </div>

            <div class="col-12">
              <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>

      </blockquote>
    </div>
  </div>
@endsection

