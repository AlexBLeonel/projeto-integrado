@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h2 class="text-center">Cadastrar Cliente</h2>

    <form action="{{ route('clients.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
            <div class="col-md-6">
                <input name="name" type="text" id="name" class="custom-select-sm form-control @error('name') is-invalid @enderror" placeholder="Informe o Nome..." required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
            <div class="col-md-6">
                <input name="phone" type="text" id="phone" class="custom-select-sm form-control @error('phone') is-invalid @enderror" placeholder="Informe o Telefone..." required autocomplete="phone" autofocus>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
            <div class="col-md-6">
                <input name="email" type="text" id="email" class="custom-select-sm form-control @error('email') is-invalid @enderror" placeholder="Informe o E-Mail..." required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Data de Nascimento') }}</label>
            <div class="col-md-6">
                <input name="birth" type="date" id="birth" class="custom-select-sm form-control @error('birth') is-invalid @enderror" placeholder="Informe a Data de Nascimento..." required autocomplete="birth" autofocus>
                @error('birth')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row align-moddle">
            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>
            <div class="col-md-6">
                <input name="cpf" type="text" id="cpf" class="custom-select-sm form-control @error('cpf') is-invalid @enderror" placeholder="Informe o CPF..." required autocomplete="cpf" autofocus>
                @error('cpf')
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