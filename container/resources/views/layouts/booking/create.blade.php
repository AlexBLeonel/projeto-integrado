@extends('layouts.app')

{{-- http://localhost/booking/create --}}

@section('content')

<div class="container">

    <h1>Booking</h1>

    <form action="" method="post">

        <div class="form-group">
            <br>
            <label for="checkin"><h4>Check-in</h4></label>
            <input type="date" name="" id="checkin">
        </div>

        <div class="form-group">
            <br>
            <label for="checkout"><h4>Check-out</h4></label>
            <input type="date" name="" id="checkout">
        </div>

        <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> salvar</button>

    </form>

</div>

@endsection
