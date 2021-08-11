@extends('layouts.app')

{{-- http://localhost/rooms/create --}}

@section('content')
<div class="container">

    <h1>Adicionar :: Produto</h1>

    <form action="" method="post">
        <div class="form-group">
            <br>
            <label for="product">
                <h4>Nome do produto</h4>
            </label>
            <input type="text" class="form-control" id="product">
        </div>

        <div class="form-group">
            <label for="description">
                <h4>Descrição do produto</h4>
            </label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="description">
                <h4>Descrição do produto</h4>
            </label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="description">
                <h4>Descrição do produto</h4>
            </label>
            <textarea class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
            </div>
        </div>

        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> salvar</button>


    </form>







</div>
@endsection