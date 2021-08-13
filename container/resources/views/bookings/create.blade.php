{{-- @extends('layouts.app')
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
@endsection --}}


@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">Fazer Reserva</h2>

    <form action="{{ route('booking.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
            <div class="col-md-6">
                <input name="client_id" type="text" id="client_id" class="custom-select-sm form-control @error('client_id') is-invalid @enderror" placeholder="Informe o Id do Cliente..." required autocomplete="client_id" autofocus>
                @error('client_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="room_id" class="col-md-4 col-form-label text-md-right">{{ __('Quarto') }}</label>
            <div class="col-md-6">
                <input name="room_id" type="text" id="room_id" class="custom-select-sm form-control @error('room_id') is-invalid @enderror" placeholder="Informe o Id do Quarto..." required autocomplete="room_id" autofocus>
                @error('room_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="checkin" class="col-md-4 col-form-label text-md-right">{{ __('Entrada') }}</label>
            <div class="col-md-6">
                <input name="checkin" type="date" id="checkin" class="custom-select-sm form-control @error('checkin') is-invalid @enderror" placeholder="Informe a Data de Entrada..." required autocomplete="checkin" autofocus>
                @error('checkin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group row">
            <label for="checkout" class="col-md-4 col-form-label text-md-right">{{ __('Saída') }}</label>
            <div class="col-md-6">
                <input name="checkout" type="date" id="checkout" class="custom-select-sm form-control @error('checkout') is-invalid @enderror" placeholder="Informe a Data de Saída..." required autocomplete="checkout" autofocus>
                @error('checkout')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-save p-1"></i>Salvar</button>
        </div>
    </form>
</div>
@endsection