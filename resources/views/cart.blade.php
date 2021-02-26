@extends('layout')
@section('title')
Panier
@endsection

@section('content')
<main id="cart_main">

    <div class="cart_article">

        <div class="cart_content">
            <div class="article_image">
                <img alt="" src="{{asset('img/drone/splash-drone-3----p-image-203855-grande-removebg-preview.png')}}"/>
            </div>
            <div class="article_description">
                <h2>Consectetur adipg elit.</h2>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.</p>
            </div>

        </div>
        <div class="cart_content">
            <div class="quantifier">


                <input type="number" value="1" min="0" max="50">

            </div>
            <div class="price">

                <h1>Prix :</h1>
                <h2>1'559.00 $</h2>
            </div>
        </div>
    </div>
    <div class="cart_article">

        <div class="cart_content">
            <div class="article_image">
                <img alt="" src="{{asset('img/drone/splash-drone-3----p-image-203855-grande-removebg-preview.png')}}"/>
            </div>
            <div class="article_description">
                <h2>Consectetur adipg elit.</h2>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.</p>
            </div>

        </div>
        <div class="cart_content">
            <div class="quantifier_container">
                <div class="quantifier">

                <input type="number" value="1" min="0" max="50">



                </div>
            </div>
            <div class="price">

                <h1>Prix :</h1>
                <h2>1'559.00 $</h2>
            </div>
        </div>
    </div>
    <div class="cart_article">

        <div class="cart_content">
            <div class="article_image">
                <img alt="" src="{{asset('img/drone/splash-drone-3----p-image-203855-grande-removebg-preview.png')}}"/>
            </div>
            <div class="article_description">
                <h2>Consectetur adipg elit.</h2>
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.
                    Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit.</p>
            </div>

        </div>
        <div class="cart_content">
            <div class="quantifier">


                <input type="number" value="1" min="0" max="50">

            </div>
            <div class="price">

                <h1>Prix :</h1>
                <h2>1'559.00 $</h2>
            </div>
        </div>
    </div>

</main>
@endsection
