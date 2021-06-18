@extends('layouts.app')
@section('title', ($data->id > 0 ? 'Editar' : 'Nova') . ' Pergunta')

@section('content')
    <div class="row mt-4">
        <div class="col-xl-9">
            <form action="{{ route('admin.questions.save', $data->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                @csrf
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('description') is-invalid @enderror"
                            name="description" id="description" placeholder="Descrição" value="{{ $data->description }}">
                        <label for="description">Descrição</label>
                    </div>
                    @error('description')
                        <div class="text-danger mt-1">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>

                <div class="col-md-12 mt-3">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('tooltip') is-invalid @enderror"
                            name="tooltip" id="tooltip" placeholder="Descrição" value="{{ $data->tooltip }}">
                        <label for="tooltip">Tooltip</label>
                    </div>
                    @error('tooltip')
                        <div class="text-danger mt-1">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>

                <div class="col-md-12 mt-3">
                    <select class="form-select @error('id_modelo') is-invalid @enderror" name="id_modelo" id="id_modelo">
                        <option value="" {{ empty(old('id_modelo', $data->modelo)) ? 'selected' : '' }}>Selecione um
                            Modelo
                        </option>
                        @foreach ($data->modelo as $modelo)
                            <option value="{{ $modelo->id }}">{{ $modelo->description }}</option>
                        @endforeach
                    </select>
                    @error('id_modelo')
                        <div class="text-danger mt-1">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
                </div>
                <div class="col-md-12 mt-3">
                    <select class="form-select" name="id_classification" id="id_classification">
                        <option value="" {{ empty(old('id_classification', $data->id)) ? 'selected' : '' }}>Selecione uma
                            Classificação
                        </option>
                        @foreach ($data->classifications as $classification)
                            <option value="{{ $classification->id }}">{{ $classification->description }}</option>
                        @endforeach
                    </select>
                    @error('id_classification')
                        <div class="text-danger mt-1">
                            <small>{{ $message }}</small>
                        </div>
                    @enderror
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
                <form action="{{ route('admin.questions.delete', $data->id) }}" method="POST" id="delete-form">
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
