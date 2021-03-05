@extends('layout')
@section('title')
    Catalogue
@endsection
@section('content')

    <div class="RealbgCat">
        <div class="textCat">
            <a href="{{route('catalog')}}">Tout les produits</a>
        </div>
        <div class="textCat">
            <a href="{{url('catalog/?sort=name&category=Pro')}}">Pro</a><a href="{{url('catalog/?sort=name&category=Amateur')}}">Amateur</a><a href="{{url('catalog/?sort=name&category=Militaire')}}">Militaire</a><a href="{{url('catalog/?sort=name&category=Enfant')}}">Enfants</a>
        </div>
        @foreach ($catalogs as $catalog)
            <div class="BgDivCat" >
                <a href="{{url('product/'.$catalog->id)}}">
                    <div>
                        <img class="Catimg"  src="{{asset($catalog->image)}}" alt="Splash Drone" />
                        <h3 class="textCatH3">{{$catalog->name}}</h3>
                        <p class="textCat">
                            {{$catalog->camera}}<br>
                            {{$catalog->weight}}<br>
                            {{$catalog->flightTime}}<br>
                            {{$catalog->flightSpeed}}
                        </p>
                        <div class="Catlign"></div>
                        <p class="textCat">{{$catalog->price}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
