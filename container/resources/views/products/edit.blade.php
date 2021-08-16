@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">Editar Produto</h2>
    <form action="{{ route('products.update', $product->id) }}" method="post">

        <div class="form-group row">
            <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('Produto') }}</label>
            <div class="col-md-6">
                <input name="product" type="text" id="product" value="{{ $product->product }}" class="custom-select-sm form-control @error('product') is-invalid @enderror" placeholder="Informe o Produto..." required autocomplete="product" autofocus>
                @error('product')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>
            <div class="col-md-6">
                <input name="description" type="text" id="description" value="{{ $product->description }}" class="custom-select-sm form-control @error('description') is-invalid @enderror" placeholder="Informe a Descrição..." required autocomplete="description" autofocus>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>
            <div class="col-md-6">
                <input name="price" type="text" id="price" value="{{ $product->price }}" class="custom-select-sm form-control @error('price') is-invalid @enderror" placeholder="Informe o Preço..." required autocomplete="price" autofocus>
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        @csrf
        <div class="text-center">
            <button type="submit" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-save p-1"></i>Salvar</button>
        </div>
    </form>
</div>
@endsection
