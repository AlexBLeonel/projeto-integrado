@extends('layouts.app')

{{-- http://localhost/rooms/create --}}

@section('content')
<div class="container">

    <h1>Fazer reserva</h1>
    <small class="form-text text-muted">Booking</small>



    <form action="" method="post">

        <div class="form-group">
            <br>
            <label for="name">
                <h4>Nome Cliente</h4>
            </label>
            <input type="text" class="form-control" id="name">
        </div>

        <div class="form-group">
            <br>
            <label for="phone">
                <h4>telefone</h4>
            </label>
            <input type="text" class="form-control" id="phone">
        </div>

        <div class="form-group">
            <br>
            <label for="email">
                <h4>Email</h4>
            </label>
            <input type="email" class="form-control" id="email">
        </div>

        <div class="form-group">
            <br>
            <label for="email">
                <h4>Data de Nascimento</h4>
            </label>
            <input type="date" class="form-control" id="birth">
        </div>

        <div class="form-group">
            <br>
            <label for="epf">
                <h4>CPF </h4>
            </label>
            <input type="text" class="form-control" id="cpf">
        </div>

        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> salvar</button>


    </form>







</div>
@endsection