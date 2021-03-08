@extends('layout')
@section('title')
    Catalogue
@endsection
@section('content')
    <div class="RealbgCat">
        @foreach($catalogs as $catalog)
    <div class="BgDivCat">
        <div>
            <img class="Catimg"  src="{{asset('/img/drone/splash-drone-3----p-image-203855-grande-removebg-preview.png')}}" alt="Splash Drone" ><a href="ficheProduit.blade.php"></a>
            <h3 class="textCatH3">{{$catalog->Name}}</h3>
            <p class="textCat">

                Caméra : Non fournis<br>
                Poids :  {{$catalog->Weight}}g<br>
                Catégorie ID:  {{$catalog->Categories_ID}}<br>
                Description:  {{$catalog->Description}}
            </p>
            <div class="Catlign"></div>
            <p class="textCat">
                {{$catalog->Price}}
                €</p>
        </div>
        @endforeach
    </div>
@endsection
