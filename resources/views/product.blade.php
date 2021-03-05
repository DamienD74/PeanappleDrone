@extends('layout')
@section('content')
    <div class="backgroundFP">
        <div class="blocProduitFP">
            <div class="imageFP">
                <img src={{asset($product->image)}} height="152" width="261">
            </div>
            <div class="backgroundTitreFP">
                <div class="titreFP">{{$product->name}}</div>
            </div>
            <div class="descriptionFP">
                {{$product->camera}} <br>
                {{$product->weight}}<br>
                {{$product->flightTime}}<br>
                {{$product->flightSpeed}}<br>
                {{$product->description}}
            </div>

            <div class="priceFP">
                {{$product->price}}
            </div>
            <a href="{{url('cart/addProduct/'.$product->id)}}"><input class="boutonFP" type="button" value="Ajouter au panier"></a>
        </div>

        <div class="flexBoxFP">
            <div class="blocFP">
                <div class="imageDroneFP">
                    <img src={{asset('/img/drone/dji-matrice-300-removebg-preview.png')}} height="75" width="152">
                </div>
                <div class="texteFP">
                    DJI Matrice 300
                </div>
            </div>
            <div class="blocFP">
                <div class="imageDroneFP">
                    <img src={{asset('/img/drone/matrice_200-removebg-preview.png')}} height="83" width="135">
                </div>
                <div class="texteFP">
                    DJI Matrice 200
                </div>
            </div>
            <div class="blocFP">
                <div class="imageDroneFP">
                    <img src={{asset('/img/drone/matrice_600-removebg-preview.png')}} height="80" width="152">
                </div>
                <div class="texteFP">
                    DJI Matrice 600
                </div>
            </div>
            <div class="blocFP">
                <div class="imageDroneFP">
                    <img src={{asset('/img/drone/inspire_2-removebg-preview.png')}} height="88" width="157">
                </div>
                <div class="texteFP">
                    DJI Inspire 2
                </div>
            </div>
        </div>
    </div>
@stop
