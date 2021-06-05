@extends('layouts.aluno')

@section('content')
    <form action="{{ route('client.store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @csrf
        @foreach($data as $data)
        <p>{{ $data->description }}</p>
        <input type="textbox" class="nps" id="value_id" name="value_id[]" data-flex-minlabel="Discordo" 
            data-flex-maxlabel="Concordo" class="ff-rating">
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
            $('.nps').ffrating({
                isStar: false
            });
        });
    </script>
@endsection
