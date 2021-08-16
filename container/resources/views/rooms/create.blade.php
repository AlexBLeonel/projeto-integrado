@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('rooms.store') }}" method="post">
        <div class="form-group">
            <br>
            <label for="number">
                <h4>Quarto Número</h4>
            </label>
            <input type="number" class="form-control" id="number" name="number" aria-describedby="Número do quarto que será">
            <small class="form-text text-muted">número do quarto que será cadastrado</small>
        </div>

        <div class="form-group">
            <label for="description">
                <h4>Descrição do quarto</h4>
            </label>
            <textarea name="description"  class="form-control" id="description" rows="3"></textarea>
            <small class="form-text text-muted">Descreva o quarto que está sendo cadastrado</small>
        </div>
        <input type="hidden" name="status" id="status" value="0" />
        @csrf
        <button type="submit" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-save"></i> salvar</button>
    </form>
</div>
@endsection
