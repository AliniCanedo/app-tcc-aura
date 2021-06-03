@extends('layouts.app')

@section('content')
    <form action="" method="post">
        @foreach ($data as $data)

            <h3>{{ $data->classification->description }}</h3>
            <p>{{ $data->description }}</p>
            @if ($data->modelo->id === 1)
                <div class="row">
                    <div class="col-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="1">
                            <label class="form-check-label" for="value">1 <b>Discordo totalmente</b></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="2">
                            <label class="form-check-label" for="value">2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="3">
                            <label class="form-check-label" for="value">3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="4">
                            <label class="form-check-label" for="value">4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="5">
                            <label class="form-check-label" for="value">5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="6">
                            <label class="form-check-label" for="value">6 <b>Concordo totalmente</b></label>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="1">
                            <label class="form-check-label" for="value">1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="2">
                            <label class="form-check-label" for="value">2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="3">
                            <label class="form-check-label" for="value">3</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="4">
                            <label class="form-check-label" for="value">4</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="5">
                            <label class="form-check-label" for="value">5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="6">
                            <label class="form-check-label" for="value">6</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="7">
                            <label class="form-check-label" for="value">7</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="8">
                            <label class="form-check-label" for="value">8</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="9">
                            <label class="form-check-label" for="value">9</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="value" id="value" value="10">
                            <label class="form-check-label" for="value">10</label>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </form>
@endsection
