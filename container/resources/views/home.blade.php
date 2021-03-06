@extends('layouts.app')

@section('content')
<div class="container-fluid row justify-content-around">
    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.pexels.com/photos/6284232/pexels-photo-6284232.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Quartos</h4>
            <a type="button" href="{{ route('rooms.create') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-plus p-1"></i> Adicionar</a>
            <a type="button" href="{{ route('rooms.list') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-clipboard-list"></i></i> Listar</a>
        </div>
    </div>

    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Pedidos</h4>
            <a type="button" href="{{ route('orders.create') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-plus p-1"></i> Adicionar</a>
            <a type="button" href="{{ route('orders.list') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-clipboard-list"></i> Listar</a>
        </div>
    </div>

    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1573567199032-50a155ba6de1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Reservas</h4>
            <a type="button" href="{{ route('bookings.create') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-plus p-1"></i> Adicionar</a>
            <a type="button" href="{{ route('bookings.list') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-clipboard-list"></i></i> Listar</a>
        </div>
    </div>

    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Clientes</h4>
            <a type="button" href="{{ route('clients.create') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-plus p-1"></i>  Adicionar</a>
            <a type="button" href="{{ route('clients.list') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-clipboard-list"></i> Listar</a>
        </div>
    </div>

    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1571907483086-3c0ea40cc16d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>TAGs</h4>
            <a type="button" href="{{ route('tags.create') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-plus p-1"></i>  Adicionar</a>
            <a type="button" href="{{ route('tags.list') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-clipboard-list"></i> Listar</a>

    </div>
    </div>

    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1052&q=80" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Produtos</h4>
            <a type="button" href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-plus p-1"></i>  Adicionar</a>
            <a type="button" href="{{ route('products.list') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-clipboard-list"></i> Listar</a>
    </div>
    </div>




</div>
@endsection
