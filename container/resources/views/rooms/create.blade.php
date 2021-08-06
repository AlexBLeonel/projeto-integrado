@extends('layouts.app')

{{-- http://localhost/rooms/create --}}

@section('content')
<div class="container">

    <h1>Criar Quarto</h1>

    <form action="" method="post">
        <div class="form-group">
            <br>
            <label for="number"><h4>Quarto Número</h4></label>
            <input type="text" class="form-control" id="number" aria-describedby="Número do quarto que será">
            <small class="form-text text-muted">número do quarto que será cadastrado</small>
        </div>

        <div class="form-group">
            <label for="description"><h4>Descrição do quarto</h4></label>
            <textarea class="form-control" id="description" rows="3"></textarea>
            <small class="form-text text-muted">Descreva o quarto que está sendo cadastrado</small>
        </div>

        <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> salvar</button>


    </form>







</div>
@endsection