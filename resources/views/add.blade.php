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
            <input class="champText" type="text" id="name" name="name"
                   minlength="1" maxlength="35" size="20">

            <!-- Error -->
            @if ($errors->has('name'))
                <div class="error">
                    {{ $errors->first('name') }}
                </div>
            @endif
            <div class="textMO">
                camera
            </div>
            <input class="champText" type="text" id="camera" name="camera"
                   minlength="1" maxlength="35" size="20">

            <!-- Error -->
            @if ($errors->has('camera'))
                <div class="error">
                    {{ $errors->first('camera') }}
                </div>
            @endif
            <div class="textMO">
                weight
            </div>
            <input class="champText" type="text" id="weight" name="weight"
                   minlength="1" maxlength="35" size="20">
            <!-- Error -->
            @if ($errors->has('weight'))
                <div class="error">
                    {{ $errors->first('weight') }}
                </div>
            @endif
            <div class="textMO">
                flightTime
            </div>
            <input class="champText" type="text" id="flightTime" name="flightTime"
                   minlength="1" maxlength="35" size="20">

            <!-- Error -->
            @if ($errors->has('flightTime'))
                <div class="error">
                    {{ $errors->first('flightTime') }}
                </div>
            @endif
                <div class="textMO">
                    flightSpeed
                </div>
            <input class="champText" type="text" id="flightSpeed" name="flightSpeed"
                   minlength="1" maxlength="35" size="20">

            <!-- Error -->
            @if ($errors->has('flightSpeed'))
                <div class="error">
                    {{ $errors->first('flightSpeed') }}
                </div>
            @endif
                <div class="textMO">
                    price
                </div>
            <input class="champText" type="text" id="price" name="price"
                   minlength="1" maxlength="35" size="20">

            <!-- Error -->
            @if ($errors->has('price'))
                <div class="error">
                    {{ $errors->first('price') }}
                </div>
            @endif
                <div class="textMO">
                    description
                </div>
            <input class="champText" type="text" id="description" name="description"
                   minlength="1" maxlength="35" size="20">

            <!-- Error -->
            @if ($errors->has('description'))
                <div class="error">
                    {{ $errors->first('description') }}
                </div>
            @endif
                <div class="textMO">
                    image
                </div>
            <input class="champText" type="text" id="image" name="image"
                   minlength="1" maxlength="35" size="20">
            <!-- Error -->
            @if ($errors->has('image'))
                <div class="error">
                    {{ $errors->first('image') }}
                </div>
            @endif
            <select name="categorie" id="categorie">
                <option value="">--Please choose an option--</option>
                <option value="1">Pro</option>
                <option value="2">Amateur</option>
                <option value="3">Racing</option>
            </select>
            <div>
                <button class="buttonModifierMO" type="submit">Ajouter</button>
            </div>
        </form>
    </div>

@endsection
