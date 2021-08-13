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
                    <th scope="col">Cliente</th>
                    <th scope="col">Quarto</th>
                    <th scope="col">Entrada</th>
                    <th scope="col">Saída</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr class="align-middle">
                        <td scope="row">{{ $booking->id }}</td>
                        <td>{{ $booking->cliente_id }}</td>
                        <td>{{ $booking->room_id }}</td>
                        <td>{{ $booking->checkin }}</td>
                        <td>{{ $booking->checkout }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('bookings.edit', $booking->id) }}" class="btn btn-sm btn-outline-secondary m-1"><i class="fas fa-pen"></i></a>
                            <a href="{{ route('bookings.destroy', $booking->id) }}" class="btn btn-sm btn-outline-danger m-1"><i class="fas fa-trash"></i></a>
                            <a href="{{ route('bookings.show', $booking->id) }}" class="btn btn-sm btn-outline-info m-1"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection