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
                    <th scope="col">Produto</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Preço Unitário</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="align-middle">
                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->product }}</td>
                        <td>{{ $product->description }}</td>
                        <td>R$ {{ $product->price }}</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-outline-secondary m-1"><i class="fas fa-pen"></i></a>
                            <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-sm btn-outline-danger m-1"><i class="fas fa-trash"></i></a>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-info m-1"><i class="fas fa-info-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection