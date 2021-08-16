@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">Editar Quarto</h2>
    <form action="" method="post">

        <div class="form-group row">
            <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('Room') }}</label>
            <div class="col-md-6">
                <input name="product" type="text" id="product" value="{{ $product->product }}" class="custom-select-sm form-control @error('product') is-invalid @enderror" placeholder="Informe o Produto..." required autocomplete="product" autofocus>
                @error('room')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="room" class="col-md-4 col-form-label text-md-right">{{ __('Quarto') }}</label>
            <div class="col-md-6">
                <input name="room" type="text" id="room" value="{{ $product->room }}" class="custom-select-sm form-control @error('description') is-invalid @enderror" placeholder="Informe a Descrição..." required autocomplete="description" autofocus>
                @error('description')
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
