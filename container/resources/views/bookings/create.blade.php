@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">Fazer Reserva</h2>

    <form action="{{ route('bookings.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
            <div class="col-md-6">
                <select name="client_id" id="client_id" class="custom-select-sm form-control @error('client_id') is-invalid @enderror" placeholder="Informe o Id do Cliente..." required autocomplete="client_id" autofocus>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->formated_name }}</option>
                    @endforeach
                </select>
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
                <select name="room_id" id="room_id" class="custom-select-sm form-control @error('room_id') is-invalid @enderror" placeholder="Informe o Id do Quarto..." required autocomplete="room_id" autofocus>
                    @foreach($rooms as $room)
                        <option value="{{ $room->id }}">Quanto número {{ $room->number }}</option>
                    @endforeach
                </select>
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
            <button type="submit" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-save p-1"></i>Salvar</button>
        </div>
    </form>
</div>
@endsection