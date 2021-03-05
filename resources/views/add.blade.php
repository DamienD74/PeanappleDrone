@extends('layout')
@section('title')
    Ajouter
@endsection

@section('content')
    <div class="fondMO">
        <div class="textRetourMO">
            <a href="{{route('backoffice')}}">Retour</a>
        </div>
        <form action="{{url('backoffice/addAtTable/')}}" method="post">
            {{ csrf_field() }}
            <div class="textMO">
                name
            </div>
            <input class="champText" type="text" id="name" name="name" required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                camera
            </div>
            <input class="champText" type="text" id="camera" name="camera" required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                weight
            </div>
            <input class="champText" type="text" id="weight" name="weight" required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                flightTIME
            </div>
            <input class="champText" type="text" id="flightTime" name="flightTime" required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                flightSpeed
            </div>
            <input class="champText" type="text" id="flightSpeed" name="flightSpeed" required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                price
            </div>
            <input class="champText" type="text" id="price" name="price" required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                description
            </div>
            <input class="champText" type="text" id="description" name="description" required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                image
            </div>
            <input class="champText" type="text" id="image" name="image" required
                   minlength="1" maxlength="35" size="20">
            <select name="categorie" id="categorie">
                <option value="">--Please choose an option--</option>
                <option value="1">Pro</option>
                <option value="2">Amateur</option>
                <option value="3">Militaire</option>
                <option value="4">Enfant</option>
            </select>
            <div>
                <button class="buttonModifierMO" type="submit">Ajouter</button>
            </div>
        </form>
    </div>

@endsection
