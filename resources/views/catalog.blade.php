@extends('layout')
@section('title')
    Catalogue
@endsection
@section('content')

    <div class="RealbgCat">

        <label for="Cat-select" class="textCat">Filtrer par catégories :</label>
        <ul>
            <li><a class="textCat" href="{{route('catalog')}}">Toutes catégories</a></li>
            <li><a class="textCat" href="{{url('catalog/1')}}">Professionel</a></li>
            <li><a class="textCat" href="{{url('catalog/2')}}">Amateur</a></li>
            <li><a class="textCat" href="{{url('catalog/3')}}">Racing</a></li>
        </ul>
        @foreach ($catalogs as $catalog)
            <div class="BgDivCat">
                <a href="{{url('product/'.$catalog->id)}}">
                    <div>
                        <img class="Catimg"  src="{{asset($catalog->image)}}" alt="Splash Drone" />
                        <h3 class="textCatH3">{{$catalog->name}}</h3>
                        <p class="textCat">
                            {{$catalog->camera}}<br>
                            {{$catalog->weight}}<br>
                            {{$catalog->flightTime}}<br>
                            {{$catalog->flightSpeed}}<br>
                            {{\App\Models\Category::find($catalog->category_id)->name}}
                        </p>
                        <div class="Catlign"></div>
                        <p class="textCat">{{$catalog->price}}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
