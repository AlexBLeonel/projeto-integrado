@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card" style="width: 18rem;">
        <img src="https://images.pexels.com/photos/6284232/pexels-photo-6284232.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Gerênciar Quartos</h4>
            <button type="button" class="btn btn-warning"><i class="fas fa-feather-alt"></i> Criar novo</button>
            <button type="button" class="btn btn-warning"><i class="fas fa-book-user"></i> Listar</button>
        </div>
    </div>

    <br>

    <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80" class="card-img-top" alt="...">
        <div class="card-body">
            <h4>Gerênciar Loja</h4>
            <button type="button" class="btn btn-warning"><i class="fas fa-feather-alt"></i> Criar novo</button>
            <button type="button" class="btn btn-warning"><i class="fas fa-shopping-basket"></i> Produtos</button>
        </div>
    </div>

</div>



@endsection