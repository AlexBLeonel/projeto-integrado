@extends('layouts.app')

@section('extra-styles')
    <style>
        td, th, tr {
            vertical-align: middle !important;
            text-align: center !important;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr class="align-middle">
                        <td scope="row">{{ $client->id }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->formated_birth }}</td>
                        <td>{{ $client->cpf }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-outline-secondary m-1"><i class="fas fa-pen"></i></a>
                            <a href="#" id="{{ 'del_' . $client->id}}"  class="btn btn-sm btn-outline-danger m-1 delete"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


@section('extra-scripts')
<script>
window.onload = function() {
    $('.delete').click(function(e){
        let deletar = confirm('Deseja excluir este item?');

        if(deletar){
            let id = $(this).attr('id').split('_')[1];

            $.ajax({
                method: 'delete',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/clients/destroy/' + id,
                success: function(res) {
                    alert('deletado com sucesso');
                    window.location.reload();
                },
                error: function(e) {
                    alert('erro ao excluir');
                }

            })
        }
    })
}
</script>
@endsection
