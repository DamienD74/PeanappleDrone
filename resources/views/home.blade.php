@extends('layout')
@section('content')

    <div class="imageHome"><img src=href={{asset('public/image_acceuil/FirthImage.png')}} alt="Image" width="1000" height="666"> <a class="titreHome">Phantom 4 Pro
            V2 </a><p class="texte1">Caméra embarquée, détection et évitement d’obstacles, assistance en vol...</p></div>
    <div class="imageHome"><img src="{{asset('public/image_acceuil//SecondImage.png')}}" alt="Image" width="1000" height="666"> <a class="titreHome">Potensic T25
            <p class="texteHome">GPS intégré, caméra HD, mode “Return home”, adapté aux débutants... </p></a>
    </div>
    <div class="imageHome"><img src="{{asset('/public/image_acceuil/ThirdImage.png')}} alt="Image" width="1000" height="666"> <a class="titreHome">Agras MG-1S RTK
            <p class="texteHome"> 10 l de cargaison, autonomie jusqu’à 22 minutes, traitement centimétrique...</p></a>
    </div>
    <div class="imageHome"><img src="{{asset('public/image_acceuil/FourthImage.png')}} alt="Image" width="1000" height="666"> <a class="titreHome">Cheerson CX-35
            Pro <p class="texteHome">10 l de cargaison, autonomie jusqu’à 22 minutes, traitement centimétrique...</p></a>
    </div>
    <div class="imageHome"><img src="{{asset('public/image_acceuil/FirthImage.png')}} alt="Image" width="1000" height="666"> <a class="titreHome">Spark- Emotion
            instantanée <p class="texteHome">Options intelligentes de contrôles, caméra HD, adapté aux débutants...</p></a>
    </div>


@stop

@extends('footer')
