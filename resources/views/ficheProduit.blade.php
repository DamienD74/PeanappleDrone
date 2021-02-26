@extends('layout')
@section('content')


<div class="backgroundFP">
    <div class="blocProduitFP">
        <div class="imageFP">
            <img src={{asset('/img/drone/splash-drone-3----p-image-203855-grande-removebg-preview.png')}} height="152" width="261">
        </div>
        <div class="backgroundTitreFP">
            <div class="titreFP">Helsel Splash Drone 3+ </div>
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

@stop


