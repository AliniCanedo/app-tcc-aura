@extends('layouts.app')
@section('title', 'Respostas')

@section('content')
    <div class="row mt-4">
        <div class="col-xl-12">
            <input type="hidden" name="id" value="{{ $data->id }}">

            <ul class="list-group">
                <li class="list-group-item">ID: {{ $data->id }} > Matricula: {{ $data->id_matricula }}</li>
                @foreach ($questions as $question)
                    @foreach ($question->questions as $answer)
                        <p>
                            Pergunta: {{ $answer->description }}
                            <b>Resposta:</b> {{ $answer->pivot->question_id }}
                        </p>
                    @endforeach
                @endforeach
            </ul>

            <div class="form-group row mb-3">
                <div class="col">
                    <hr>
                    <a href="javascript:history.go(-1);" class="btn btn-secondary mb-1">
                        <i class="bi bi-arrow-left-short"></i>
                        Voltar
                    </a>
                </div>
            </div>

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


@endsection
