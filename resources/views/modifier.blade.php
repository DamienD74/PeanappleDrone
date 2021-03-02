@extends('layout')
@section('title')
    Modifier
@endsection

@section('content')
    <div class="fondCO">
        <form action="{{url('backoffice/update/'.$product->id)}}" method="post">
            {{ csrf_field() }}
            <div class="textCO">
                name
            </div>
            <input class="champText" type="text" id="name" name="name" required
                   minlength="1" maxlength="35" size="20">
            <div class="textCO">
                camera
            </div>
            <input class="champText" type="text" id="camera" name="camera" required
                   minlength="1" maxlength="35" size="20">
            <div class="textCO">
                weight
            </div>
            <input class="champText" type="text" id="weight" name="weight" required
                   minlength="1" maxlength="35" size="20">
            <div class="textCO">
                flightTIME
            </div>
            <input class="champText" type="text" id="flightTime" name="flightTime" required
                   minlength="1" maxlength="35" size="20">
            <div class="textCO">
                flightSpeed
            </div>
            <input class="champText" type="text" id="flightSpeed" name="flightSpeed" required
                   minlength="1" maxlength="35" size="20">
            <div class="textCO">
                price
            </div>
            <input class="champText" type="text" id="price" name="price" required
                   minlength="1" maxlength="35" size="20">
            <div class="textCO">
                description
            </div>
            <input class="champText" type="text" id="description" name="description" required
                   minlength="1" maxlength="35" size="20">
            <div class="textCO">
                image
            </div>
            <input class="champText" type="text" id="image" name="image" required
                   minlength="1" maxlength="35" size="20">
            <div class="button newUserCO">
                <button type="submit">Envoyer le message</button>
            </div>
        </form>
    </div>

@endsection
