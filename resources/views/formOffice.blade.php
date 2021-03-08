@extends('layout')
@section('content')

<div class="fondCO">
    <form action="{{route('product.update', ['ID'=>$ID])}}" method="POST" >
        @csrf
        <div class="textCO">
            Name
        </div>

        <input class="champText" type="text" id="Name" name="Name" required
               minlength="1" maxlength="35" size="20">
        <div class="textCO">
            Price
        </div>

        <input class="champText" type="text" id="Price" name="Price" required
               minlength="1" maxlength="35" size="20"><br>
        <button type="submit" class="btn btn-light">Modifier</button>
    </form>

</div>
@endsection
