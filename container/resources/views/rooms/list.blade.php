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
                        <th scope="col">Descrição</th>
                        <th scope="col">Status Atual</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($rooms as $room)
                        <tr class="align-middle">
                            <td scope="row">{{ $room->id }}</td>
                            <td>N° {{ $room->number }}</td>
                            <td>{{ $room->description }}</td>
                            <td>{{ $room->formated_status }}</td>
                            <td class="d-flex justify-content-around">
                                <button type="button" class="btn btn-sm btn-outline-secondary m-1" data-toggle="modal" data-target="#edit-room-{{ $room->id }}"><i class="far fa-pen"></i></button>

                                <div class="modal fade" id="edit-room-{{ $room->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form method="post" action=" {{ route('rooms.update', $room->id) }} ">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">

                                                <div class="form-group row align-middle">
                                                    <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Id') }}</label>
                                                    <div class="col-md-6">
                                                        <input name="id" id="id" value="{{ $room->id }}" class="custom-select-sm form-control @error('id') is-invalid @enderror" value="{{ $room->id }}" required autocomplete="id" autofocus disabled>
                                                        @error('id')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row align-middle">
                                                    <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('N° Quarto') }}</label>
                                                    <div class="col-md-6">
                                                        <input name="number" id="number" value="{{ $room->number }}" class="custom-select-sm form-control @error('number') is-invalid @enderror" value="{{ $room->number }}" required autocomplete="number" autofocus>
                                                        @error('number')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row align-middle">
                                                    <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Status do quarto') }}</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" class="status" name="status" id="status">
                                                            <option value="{{ $room->status }}" selected>{{ $room->formated_status }}</option>
                                                            <option value="1">Ocupado</option>
                                                            <option value="0">Disponível</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="description"
                                                        class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>
                                                    <div class="col-md-6">
                                                        <textarea name="description" id="description" cols="30" rows="5" class="custom-select-sm form-control @error('nome') is-invalid @enderror" value="{{ $room->description }}" required autocomplete="description" autofocus>{{ $room->description }}</textarea>
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-outline-danger" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-sm btn-outline-success"><i class="fas fa-save p-1"></i>Salvar</button>
                                            </div>
                                            @csrf
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" id="{{ 'del_' . $room->id}}"  class="btn btn-sm btn-outline-danger m-1 delete"><i class="fas fa-trash"></i></a>
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
                url: '/rooms/destroy/' + id,
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
