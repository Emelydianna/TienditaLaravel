@extends('layouts.app')
@section('title','TIENDITA')
@section('content')
<br>
    <div class="card mx-auto p-2" style="width: 95%;">
        <div class="card-header">
         <h3>
            <b>
                PRODUCTOS
            </b>
         </h3>
        </div>
        <div class="card-body">
          <h5 class="card-title">Registros de productos</h5>
          
          <div class="text-end">
           <br>
            <hr>
            <table class="table table-striped table-hover">
                <thead class="table-warning">
                    <tr>
                      <th scope="col">CÓDIGO</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">PRECIO</th>
                      <th scope="col">MARCA</th>
                      <th scope="col">ACCIÓN</th>
                    </tr>
                  </thead>
          <tbody class="table-group-divider">
                @foreach ($productos as $product)
                   <tr>
                    <th scope="row">{{$product->codigo}}</th>
                    <td>{{$product->nombre}}</td>
                    <td>{{$product->precio}}</td>
                    <td>{{$product->marca}}</td>
                    <td>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{url('productos/'.$product->codigo.'/edit')}}" class="btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Editar"><i class="bi bi-pencil-square" style="color: blue; font-size: 1.5rem"></i></a>
                          <!-- Botón de Eliminación con Confirmación -->
                          <button type="button" class="btn" onclick="openDeleteModal({{ $product->codigo }})" data-bs-toggle="tooltip" data-bs-placement="left" title="Eliminar">
                            <i class="bi bi-trash3" style="font-size: 1.5rem; color: red"></i>
                          </button>
                          </div>
                      </td>
                  </tr>
                @endforeach
          </tbody>
      </table>
      </div>
      </div>  
      </div>
      

  @endsection
  

  <script>
          function openDeleteModal(codigo) {
            var form = document.getElementById('delete-form');
            form.action = 'productos/' + codigo;
            var myModal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            myModal.show();
            }
        document.addEventListener('DOMContentLoaded', function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        });
  </script>
       