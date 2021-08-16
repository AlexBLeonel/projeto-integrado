@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">Adicionar Pedido</h2>

    <form action="{{ route('orders.store')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="product_id" class="col-md-4 col-form-label text-md-right">{{ __('Produto') }}</label>
            <div class="col-md-6">
                <select name="product_id" id="product_id" class="custom-select-sm form-control @error('product_id') is-invalid @enderror" placeholder="Informe o Id do Quarto..." required autocomplete="product_id" autofocus>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product }}</option>
                    @endforeach
                </select>
                @error('product_id')
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
                        <option value="{{ $room->id }}">Quarto número {{ $room->number }}</option>
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
            <label for="room_id" class="col-md-4 col-form-label text-md-right">{{ __('Observações') }}</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="note" required/>

            </div>
        </div>

        <input type="hidden" name="status" value="1">
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-save p-1"></i>Salvar</button>
        </div>
    </form>
</div>
@endsection
