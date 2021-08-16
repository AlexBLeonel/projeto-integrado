@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="container">
        <form action="{{ route('tags.update', $tag->id)}}" method="post">
            <div class="form-group">
                <label for="description">
                    <h4>Tipo da tag</h4>
                </label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $tag->type }}">
                <small class="form-text text-muted">Descreva o tipo da tag que está sendo cadastrada</small>
            </div>

            <div class="form-group">
                <br>
                <label for="number">
                    <h4>Descrição</h4>
                </label>
                <input type="text" value="{{ $tag->description }}" class="form-control" id="description" name="description">
                <small class="form-text text-muted">Nome da tag</small>
            </div>

            <div class="form-group">
                <label for="description">
                    <h4>Observações da tag</h4>
                </label>
                <textarea class="form-control" id="notes" rows="3" name="notes">{{ $tag->notes }}</textarea>
                <small class="form-text text-muted">Descreva a tag que está sendo cadastrada</small>
            </div>
            @csrf
            <button type="submit" class="btn btn-sm btn-outline-primary m-1"><i class="fas fa-save"></i> salvar</button>
        </form>
    </div>
</div>

@endsection
