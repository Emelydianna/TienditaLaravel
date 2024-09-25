@extends('layouts.app')
@section('title','TIENDITA')
@section('content')
<br>
    <div class="card mx-auto p-2" style="width: 95%;">
        <div class="card-header">
         <h3>
            <b>
                CLIENTES
            </b>
         </h3>
        </div>
        <div class="card-body">
          <h5 class="card-title">Registros de clientes</h5>
          
          <div class="text-end">
           <br>
            <hr>
            <table class="table table-striped table-hover">
                <thead class="table-warning">
                    <tr>
                      <th scope="col">CÓDIGO</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">EDAD</th>
                      <th scope="col">CATEGORIA</th>
                      <th scope="col">ACCIONES</th>
                    </tr>
                  </thead>
          <tbody class="table-group-divider">
                @foreach ($clientee as $client)
                   <tr>
                    <th scope="row">{{$client->codigo}}</th>
                    <td>{{$client->nombre}}</td>
                    <td>{{$client->edad}}</td>
                    <td>{{$client->categoria}}</td>
                    <td>
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{url('clientes/'.$client->codigo.'/edit')}}" class="btn" data-bs-toggle="tooltip" data-bs-placement="left" title="Editar"><i class="bi bi-pencil-square" style="color: blue; font-size: 1.5rem"></i></a>
                          <!-- Botón de Eliminación con Confirmación -->
                          <button type="button" class="btn" onclick="openDeleteModal({{ $client->codigo }})" data-bs-toggle="tooltip" data-bs-placement="left" title="Eliminar">
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
            form.action = 'clientes/' + codigo;
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
       