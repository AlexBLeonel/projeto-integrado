@extends('layouts.app')

{{-- http://localhost/rooms/create --}}

@section('content')
<div class="container">

    <h1>Fazer reserva</h1>
    <small class="form-text text-muted">Booking</small>

    <form action="" method="post">

        <div class="form-group">
            <br>
            <label for="checking">
                <h4>Data de Entrada</h4>
            </label>
            <input type="date" class="form-control" id="checking">
        </div>
        <div class="form-group">
            <br>
            <label for="checkout">
                <h4>Data de saida</h4>
            </label>
            <input type="date" class="form-control" id="checkout">
        </div>

        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> salvar</button>


    </form>







</div>
@endsection