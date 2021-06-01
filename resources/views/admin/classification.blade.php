@extends('layouts.app')
@section('title', ($data->id > 0 ? 'Editar' : 'Nova') . ' Classificação')

@section('content')
    <div class="row mt-4">
        <div class="col-xl-9">
            <form action="{{ route('admin.classifications.save', $data->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">

                <label for="description">Descrição</label>
                <textarea name="description" id="description" rows="3"
                    class="form-control">{{ old('description', $data->description) }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                <div class="form-group row mb-3">
                    <div class="col">
                        <hr>
                        <button type="submit" class="btn btn-success mb-1">
                            <i class="bi bi-save"></i>
                            Salvar
                        </button>
                        <a href="javascript:history.go(-1);" class="btn btn-secondary mb-1">
                            <i class="bi bi-arrow-left-short"></i>
                            Cancelar
                        </a>
                        @if ($data->id > 0)
                            <a href="#" class="btn btn-danger mb-1" id="btn-delete">
                                <i class="bi bi-trash"></i>
                                Remover?
                            </a>
                        @endif
                    </div>
                </div>
            </form>
            @if ($data->id > 0)
                <form action="{{ route('admin.classifications.delete', $data->id) }}" method="POST" id="delete-form">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                </form>
            @endif
        </div>
    </div>

@endsection
@section('css-includes')
@endsection
@section('javacript-includes')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/vendor/sweetalert/sweetalert.all.js') }}"></script>
@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
            @if ($data->id > 0)
                $('#btn-delete').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                title: 'Tem certeza?',
                text: "Deseja realmente remover esse registro?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim remover',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.value) {
                $('#delete-form').submit();
                }
                });
                });
            @endif
        });

    </script>
@endsection
