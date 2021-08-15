@extends('layouts.app')

@section('content')

<h1></h1>

<div class="container-fluid">


<div class="container">
    <form action="{{ route('rooms.create') }}" method="post">
        <div class="form-group">
            <br>
            <label for="number">
                <h4>Nome TAG</h4>
            </label>
            <input type="text" class="form-control" id="number">
            <small class="form-text text-muted">número do quarto que será cadastrado</small>
        </div>

        <div class="form-group">
            <label for="description">
                <h4>Descrição do quarto</h4>
            </label>
            <textarea class="form-control" id="description" rows="3"></textarea>
            <small class="form-text text-muted">Descreva o quarto que está sendo cadastrado</small>
        </div>
        <button type="button" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-save"></i> salvar</button>
    </form>
</div>

</div>

@endsection