@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.pexels.com/photos/6284232/pexels-photo-6284232.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Quartos</h4>
            <a type="button" href="{{ route('rooms.create') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-plus p-1"></i>Adicionar</a>
            <a type="button" href="{{ route('rooms.list') }}" class="btn btn-sm btn-outline-primary"><i class="fas fa-bed p-1"></i>Quartos</a>
        </div>
    </div>
    <br>
    <div class="card text-center" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Loja</h4>
            <a type="button" href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-plus p-1"></i>Adicionar</a>
            <a type="button" href="{{ route('products.list') }}" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-shopping-basket p-1"></i>Produtos</a>
        </div>
    </div>
</div>
@endsection