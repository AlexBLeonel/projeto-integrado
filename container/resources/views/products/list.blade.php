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
        <div class="text-center mb-3">
            <h2>Listagem de Produtos</h2>
        </div>
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
                            <a href="#" id="{{ 'del_' . $product->id}}"  class="btn btn-sm btn-outline-danger m-1 delete"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection


@section('extra-scripts')
<script>
window.onload = function() {
    $('.delete').click(function(e){
        let deletar = confirm('Deseja excluir este item?');

        if(deletar){
            let id = $(this).attr('id').split('_')[1];

            $.ajax({
                method: 'delete',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/products/destroy/' + id,
                success: function(res) {
                    alert('deletado com sucesso');
                    window.location.reload();
                },
                error: function(e) {
                    alert('erro ao excluir');
                }

            })
        }
    })
}
</script>
@endsection
