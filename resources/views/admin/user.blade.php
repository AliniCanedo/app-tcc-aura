@extends('layouts.app')
@section('title', ($data->id > 0 ? 'Editar' : 'Novo') . ' Usuário')

@section('content')
    <div class="row mt-4">
        <div class="col-xl-9">
            <form action="{{ route('admin.users.save', $data->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                @csrf
                <div class="form-group row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="Nome" value="{{ $data->name }}">
                            <label for="name">Nome</label>
                        </div>
                        @error('name')
                            <div class="text-danger mt-1">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="E-mail" value="{{ $data->email }}">
                            <label for="email">E-mail</label>
                        </div>
                        @error('email')
                            <div class="text-danger mt-1">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="number" class="form-control @error('matricula') is-invalid @enderror"
                                name="matricula" id="matricula" placeholder="Matricula" value="{{ $data->matricula }}">
                            <label for="matricula">Matricula</label>
                        </div>
                        @error('matricula')
                            <div class="text-danger mt-1">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="number" class="form-control @error('periodo') is-invalid @enderror"
                                name="periodo" id="periodo" placeholder="Periodo" value="{{ $data->periodo }}">
                            <label for="periodo">Periodo</label>
                        </div>
                        @error('periodo')
                            <div class="text-danger mt-1">
                                <small>{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-md-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type')}}" required>
                                <option value="">Selecione uma Opção</option>
                                <option value="admin">Administrador</option>
                                <option value="client">Aluno</option>
                            </select>
                            <label for="floatingSelect">Tipo</label>
                        </div>
                        @error('type')
                        <div class="text-danger mt-1">
                            <small>{{ $message }}</small>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Senha" value="{{ $data->password }}">
                            <label for="password">Senha</label>
                        </div>
                        @error('password')
                            <div class="text-danger mt-1">
                                <small>{{ $message }}</small>
                            </div>
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
                <form action="{{ route('admin.users.delete', $data->id) }}" method="POST" id="delete-form">
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
