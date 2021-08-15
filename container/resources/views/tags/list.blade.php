@extends('layouts.app')

@section('extra-styles')
    <style>
        td, th, tr {
            vertical-align: middle !important;
            text-align: center !important;
        }
    </style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Quarto</th>
                    <th scope="col">Status</th>
                    <th scope="col">Observações</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                    <tr class="align-middle">
                        <td scope="row">{{ $tag->id }}</td>
                        <td>N° {{ $tag->room->number }}</td>
                        <td>{{ $tag->formated_status }}</td>
                        <td>{{ $tag->formated_notes }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-outline-secondary m-1"><i class="fas fa-pen"></i></a>
                            <a href="{{ route('tags.destroy', $tag->id) }}" class="btn btn-sm btn-outline-danger m-1"><i class="fas fa-trash"></i></a>
                            <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-outline-info m-1"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection