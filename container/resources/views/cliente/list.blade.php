@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Clientes :: Listar</h1>

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome Cliente</th>
        <th scope="col">Tipo suíte</th>
        <th scope="col">Data de Entrada</th>
        <th scope="col">Data de saída</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <th>Nome Cliente</th>
        <th>Master</th>
        <td>entrada</td>
        <td>saida</td>
        <td>
          <button type="button" class="btn btn-warning"><i class="fas fa-pencil-ruler"></i> Editar</button>
        </td>
      </tr>
    </tbody>


    @endsection