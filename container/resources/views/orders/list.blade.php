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
                    <th scope="col">Quarto</th>
                    <th scope="col">Status</th>
                    <th scope="col">Observações</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr class="align-middle">
                        <td scope="row">{{ $order->id }}</td>
                        <td>N° {{ $order->room->number }}</td>
                        <td>{{ $order->formated_status }}</td>
                        <td>{{ $order->formated_notes }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-outline-secondary m-1"><i class="fas fa-pen"></i></a>
                            <a href="{{ route('orders.destroy', $order->id) }}" class="btn btn-sm btn-outline-danger m-1"><i class="fas fa-trash"></i></a>
                            <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-outline-info m-1"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection