@extends('layouts.app')

@section('content')
<div class="container">

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




      <th scope="row">1</th>
      <td>666</td>
      <td>Descrição massa!</td>
      <td>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
          <i class="far fa-edit"></i> Editar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-info"><i class="fas fa-save"></i> Salvar</button>
              </div>
            </div>
          </div>
        </div>


      </td>
      </tr>



    </tbody>
  </table>


</div>
@endsection