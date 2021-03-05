@extends('layout')
@section('title')
    Modifier
@endsection

@section('content')
    <div class="fondMO">
        <div class="textRetourMO">
            <a href="{{route('backoffice')}}">Retour</a>
        </div>
        <form action="{{url('backoffice/update/'.$product->id)}}" method="post">
            {{ csrf_field() }}
            <div class="textMO">
                name
            </div>
            <input class="champText" type="text" id="name" name="name" value={{$product->name}} required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                camera
            </div>
            <input class="champText" type="text" id="camera" name="camera" value={{$product->camera}} required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                weight
            </div>
            <input class="champText" type="text" id="weight" name="weight" value={{$product->weight}} required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                flightTIME
            </div>
            <input class="champText" type="text" id="flightTime" name="flightTime" value={{$product->flightTime}} required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                flightSpeed
            </div>
            <input class="champText" type="text" id="flightSpeed" name="flightSpeed" value={{$product->flightSpeed}} required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                price
            </div>
            <input class="champText" type="text" id="price" name="price" value={{$product->price}} required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                description
            </div>
            <input class="champText" type="text" id="description" name="description" value={{$product->description}} required
                   minlength="1" maxlength="35" size="20">
            <div class="textMO">
                image
            </div>
            <input class="champText" type="text" id="image" name="image" value={{$product->image}} required
                   minlength="1" maxlength="35" size="20">
            <select name="categorie" id="categorie">
                <option value="">--Please choose an option--</option>
                <option value="1" {{$product->categorie_id == 1 ? "selected":""}}>Pro</option>
                <option value="2" {{$product->categorie_id == 2 ? "selected":""}}>Amateur</option>
                <option value="3" {{$product->categorie_id == 3 ? "selected":""}}>Militaire</option>
                <option value="4" {{$product->categorie_id == 4 ? "selected":""}}>Enfant</option>
            </select>
            <div>
                <button class="buttonModifierMO" type="submit">Modifier</button>
            </div>
        </form>
    </div>

@endsection
