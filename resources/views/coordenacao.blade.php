@extends('layouts.aluno')

@section('content')
    <form action="{{ route('client.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @csrf
        @foreach ($data as $data)
            @if($data->modelo->id === 2 && $data->classifications->id === 5)
                <h5>{{ $data->classifications->description }}</h5>
                <p>{{ $data->description }}</p>
                <input type="textbox" id="value_id" name="value_id[]" data-flex-minlabel="Discordo"
                data-flex-maxlabel="Concordo Totalmente" class="nps ff-rating">
            @endif
        @endforeach
        <div class="row">
            <div class="col">
                <a href="{{ route('answer.curso-atividade') }}" class="btn btn-primary">Próxima</a>
            </div>
        </div>
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
            $('.nps').ffrating({
                isStar: true,
                min: 1,
                max: 10
            });
        });

    </script>
@endsection
