@extends('layouts.app')

@section('content')
<div class="container">

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Nome Teste</td>
        <td>Descrição Teste</td>
        <td>é mais de 8000</td>
        <td>
          <button type="button" class="btn btn-warning"><i class="far fa-edit"></i> Editar</button>
        </td>
      </tr>
    </tbody>
  </table>


</div>
@endsection