@extends('layouts.app')
@section('title','TIENDITA')
@section('content')
<br>
<div class="card mx-auto p-2" style="width: 85%">
    <div class="card-header">
    <h1>Pantalla de inicio</h1>
      </div>
    <div class="card-body">
      <h2>BIENVENIDO: {{ Auth::user()->name }}</h2>
    </div>
  </div>
  @endsection
