@extends('layouts.app')

@section('content')
  @foreach ($data as $data)
  <p>  {{$data->description}}</p>
  @endforeach
@endsection