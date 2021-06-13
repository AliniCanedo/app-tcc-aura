@extends('layouts.aluno')

@section('content')
    <form action="{{ route('client.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @csrf
        @foreach ($data as $data)
            @if ($data->modelo->id === 2 && $data->classifications->id === 7)
                <h5>{{ $data->classifications->description }}</h5>
                <p><small class="text-danger">*</small> {{ $data->description }} <i class="fas fa-danger-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $data->tooltip}}"></i></p>
                <div class="row">
                    <div class="col d-flex mb-5">
{{--                         <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-success text-black px-4 mx-1" value="10"><span>10</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-success text-black px-4 mx-1" value="9"><span>9</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-warning text-black px-4 mx-1" value="8"><span>8</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-warning text-black px-4 mx-1" value="7"><span>7</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-danger text-black px-4 mx-1" value="6"><span>6</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-danger text-black px-4 mx-1" value="5"><span>5</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-danger text-black px-4 mx-1" value="4"><span>4</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-danger text-black px-4 mx-1" value="3"><span>3</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-danger text-black px-4 mx-1" value="2"><span>2</span></a>
                        <a href="#" type="checkbox" name="value_id[]_{{$data->id}}" id="value_id_{{$data->id}}" class="btn btn-danger text-black px-4 mx-1" value="1"><span>1</span></a> --}}
                            <input type="checkbox" name="value_id" value="1">1
                            <input type="checkbox" name="value_id" value="2">2
                            <input type="checkbox" name="value_id" value="3">3
                    </div>
                    <hr>
                </div>
            @endif
        @endforeach
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Responder</button>
            </div>
        </div>
    </form>
@endsection
@section('css-includes')
@endsection
@section('css')
@endsection
@section('javacript-includes')
@endsection
@section('javascript')
    <script>
        document.getElementById("value_id").addEventListener("click", function(event){
            event.preventDefault()
        });
    </script>
@endsection
