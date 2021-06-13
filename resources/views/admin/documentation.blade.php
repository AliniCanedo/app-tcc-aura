@extends('layouts.app')
@section('title', ($data->id > 0 ? 'Editar' : 'Novo') . ' Modelo de Documento')

@section('content')
<div class="row mt-4">
    <div class="col">
        <div class="alert alert-warning">
            <b>Atenção:</b>
            <br>Ao gerar uma nova documentação, sempre será a última versão de documentação que será utilizada. Ao gerar um nova documentação, os documentos já gerados não sofrerão alterações.
        </div>
        <form action="{{ route('admin.documentations.save', $data->id) }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">

            <div class="form-group row">
                <label for="content" class="col-12 col-form-label">Documentação</label>
                <div class="col-12">
                    <textarea name="content" id="content" rows="5" class="form-control" required>{{ $data->content }}</textarea>
                    @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="notes" class="col-sm-2 col-form-label">Observações Internas</label>
                <div class="col-sm-10">
                    <textarea name="notes" id="notes" rows="3" class="form-control">{{ old('notes', $data->notes) }}</textarea>
                    @error('notes')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

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
        <form action="{{ route('admin.documentations.delete', $data->id) }}" method="POST" id="delete-form">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
        </form>
        @endif
    </div>
</div>

@endsection
@section('css-includes')
<link rel="stylesheet" href="{{ asset('css/admin/summernote-bs4.min.css') }}">
@endsection
@section('javacript-includes')
<script src="{{ asset('js/admin/summernote-bs4.min.js') }}"></script>
@endsection
@section('javascript')
<script>
    $(document).ready(function () {

        // se tiver contrato
        $('textarea#content').summernote({
            placeholder: 'Conteúdo do Contrato',
            tabsize: 4,
            height: 250
        });

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
