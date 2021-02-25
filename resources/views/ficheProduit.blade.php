@extends('layout')
@section('content')

<link rel="stylesheet"  href="{{ asset('css/ficheProduit.css')}}">

<body>
<div class="backgroundFP">
    <div class="blocProduitFP">
        <div class="imageFP">
            <img src={{asset('/img/drone/splash-drone-3----p-image-203855-grande-removebg-preview.png')}} height="152" width="261">
        </div>
        <div class="titreFP">
            Helsel Splash Drone 3+
        </div>

        <div class="descriptionFP">
            Caméra : Non fournis <br>
            Poids : 1447 g<br>
            Temps de vol : 20 minutes<br>
            Vitesse max en vol : 20m/s<br>
            Etanchéité : Flottant (600 mm)<br>
            Diamètre de l’axe : 450 mm<br>
            Tenue au vent : 12m/s(22-27 noeuds)<br>
            Hélices en fibre de carbone<br>
        </div>

        <div class="priceFP">
            Prix: 1559 €
        </div>

        <input class="boutonFP"
               type="button"
               value="Ajouter au panier">
    </div>

    <div>
        <div>
            <a class="imageDroneFP">
                <div>
                    <img src={{asset('/img/drone/dji-matrice-300-removebg-preview.png')}} height:"153" width="71">>
                </div>
                <div class="nomFP">
                    DJI Matrice 300
                </div>
            </a>
            <a class="imageDroneFP">
                <div>
                    <img src={{asset('/img/drone/matrice_200-removebg-preview.png')}} height:"135" width="83">>
                </div>
                <div  class="nomFP">
                    DJI Matrice 200
                </div>
            </a>
        </div>
        <div>
            <a class="imageDroneFP">
                <div>
                    <img src={{asset('/img/drone/matrice_600-removebg-preview.png')}} height:"157" width="88">>
                </div>
                <div class="nomFP">
                    DJI Matrice 600
                </div>
            </a>
            <a class="imageDroneFP">
                <div>
                    <img src={{asset('/img/drone/inspire_2-removebg-preview.png')}} height:"151" width="80">>
                </div>
                <div  class="nomFP">
                    DJI Inspire 2
                </div>

            </a>
        </div>
    </div>
</div>


</body>
@stop


