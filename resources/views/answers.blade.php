@extends('layouts.aluno')

@section('content')
    <form action="{{ route('client.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @csrf
        @foreach ($data as $data)
            @if ($data->modelo->id === 1)
                <table class="table">
                    <tr>
                        <td>
                            <p><b>{{ $data->classifications->description }}</b></p>
                            <p>{{ $data->description }}</p>
                            <input type="textbox" id="value_id" name="value_id[]" data-flex-minlabel="Discordo"
                                data-flex-maxlabel="Concordo Totalmente" class="multiple ff-rating">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="nao_sabe">
                                <label class="form-check-label" for="nao_sabe">
                                    Não sei responder
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="nao_aplica">
                                <label class="form-check-label" for="nao_aplica">
                                    Não se aplica
                                </label>
                            </div>
                        </td>
                    </tr>
                </table>
            @else
                <table class="table">
                    <tr>
                        <td>
                            <p><b>{{ $data->classifications->description }}</b></p>
                            <p>{{ $data->description }}</p>
                            <input type="textbox" id="value_id" name="value_id[]" data-flex-minlabel="Discordo"
                                data-flex-maxlabel="Concordo" class="nps ff-rating">
                        </td>
                    </tr>
                </table>
            @endif
        @endforeach
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
@endsection
@section('css-includes')
    <link rel="stylesheet" href="{{ asset('css/ffrating.css') }}">
@endsection
@section('javacript-includes')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/ffrating.js') }}" defer></script>
@endsection
@section('javascript')
    <script>
        $(document).ready(function() {
            $('.multiple').ffrating({
                isStar: false,
                min: 1,
                max: 6
            });
        });
        $(document).ready(function() {
            $('.nps').ffrating({
                isStar: true,
                min: 1,
                max: 10
            });
        });

    </script>
@endsection
