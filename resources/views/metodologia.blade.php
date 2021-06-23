@extends('layouts.aluno')

@section('content')
    <form action="{{ route('metodologia.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @csrf
        @foreach ($data as $data)
            @if ($data->modelo->id === 1 && $data->classifications->id === 2)
                <h5>{{ $data->classifications->description }}</h5>
                <p><small class="text-danger">*</small> {{ $data->description }} <i class="fas fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $data->tooltip}}"></i></p>
                <input type="textbox" id="value_id" name="value_id[]" data-flex-minlabel="Discordo"
                    data-flex-maxlabel="Concordo Totalmente" class="multiple ff-rating" required>
                <div class="row">
                    <div class="col">
                        <input type="checkbox" value="Não sabe responder" name="nao_sabe[]" id="nao_sabe_{{ $data->id }}"
                            class="ff-rating" data-toggle="tooltip" data-placement="bottom" title="{{$data->tooltip}}"/>
                        <label for="nao_sabe_{{ $data->id }}">Não sabe esponder</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="checkbox" value="Não sabe responder" name="nao_aplica[]"
                            id="nao_aplica_{{ $data->id }}" class="ff-rating" />
                        <label for="nao_aplica_{{ $data->id }}">Não se aplica</label>
                    </div>
                </div>
                <hr>
            @endif
        @endforeach
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Responder</button>
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
