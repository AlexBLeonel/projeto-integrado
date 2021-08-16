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
    <div class="text-center mb-3">
        <h2>Listagem de Reservas</h2>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Quarto</th>
                    <th scope="col">Entrada</th>
                    <th scope="col">Saída Prevista</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr class="align-middle">
                        <td scope="row">{{ $booking->id }}</td>

                        <td>{{ $booking->client->formated_name }}</td>
                        <td>N° {{ $booking->room->formated_number }}</td>

                        <td>{{ $booking->formated_checkin }}</td>
                        <td>{{ $booking->formated_checkout }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-outline-secondary m-1"><i class="fas fa-pen"></i></a>
                            <a href="#" id="{{ 'del_' . $booking->id}}"  class="btn btn-sm btn-outline-danger m-1 delete"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
