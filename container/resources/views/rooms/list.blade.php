@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Quartos :: Listar</h1>


  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Número do quarto</th>
        <th scope="col">Descrição</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>666</td>
        <td>Descrição massa!</td>
        <td>
          <button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</button>
        </td>
      </tr>
    </tbody>
  </table>


</div>
@endsection