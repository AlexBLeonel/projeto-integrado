@extends('layouts.app')

{{-- http://localhost/products/create --}}

@section('content')
<div class="container">

    <h1>Criar Quarto</h1>
    <form action="" method="post">
        <div class="form-group">
            <br>
            <label for="product"><h4>Criação de Produto</h4></label>
            <input type="text" class="form-control" id="product" aria-describedby="Nome: ">
        </div>

        <div class="form-group">
            <label for="description"><h4>Descrição</h4></label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <br>
            <label for="price"><h4>Preço</h4></label>
            <input type="number" class="form-control" id="price">
        </div>


        <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> salvar</button>


    </form>

</div>
@endsection
