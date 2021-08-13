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
                            <a href="{{ route('clients.destroy', $client->id) }}" class="btn btn-sm btn-outline-danger m-1"><i class="fas fa-trash"></i></a>
                            <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-outline-info m-1"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection