@extends('layout')
@section('title')
Panier
@endsection

@section('content')


@section('content')
<main id="cart_main">
    @if($cart[0]["product"] != null)
    @foreach ($cart as $product)
        <div class="cart_article">
            <div class="cart_content">
                <div class="article_image">
                    <img alt="" src="dfssfsd"/>
                </div>
                <div class="article_description">
                    <h2><a href="{{url('product/'.$product["product"]->id)}}">{{$product["product"]->name}}</a></h2>
                    {{$product["product"]->camera}} <br>
                    {{$product["product"]->weight}}<br>
                    {{$product["product"]->flightTime}}<br>
                    {{$product["product"]->flightSpeed}}<br>
                </div>
            </div>
            <div class="cart_content">
                <div class="quantifier">
                    <input type="number" value="{{$product["quantity"]}}" min="0" max="50">
                </div>
                <div class="price">
                    <h1>Prix :</h1>
                    <h2>{{$product["product"]->price}} $</h2>
                    <a href="{{url('cart/deleteProduct/'.$product["product"]->id)}}" class="trash">
                        <svg  width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4615 2.25H11.0769V1.6875C11.0769 0.755508 10.2504 0 9.23077 0H6.76923C5.74962 0 4.92308 0.755508 4.92308 1.6875V2.25H1.53846C0.688808 2.25 0 2.87961 0 3.65625V4.78125C0 5.09193 0.2755 5.34375 0.615385 5.34375H15.3846C15.7245 5.34375 16 5.09193 16 4.78125V3.65625C16 2.87961 15.3112 2.25 14.4615 2.25ZM6.15385 1.6875C6.15385 1.37742 6.43 1.125 6.76923 1.125H9.23077C9.57 1.125 9.84615 1.37742 9.84615 1.6875V2.25H6.15385V1.6875Z" fill="white"/>
                            <path d="M1.1923 6C1.08249 6 0.994992 6.08388 1.00022 6.18415L1.50792 15.9239C1.55484 16.8253 2.36484 17.5312 3.35176 17.5312H12.6971C13.6841 17.5312 14.4941 16.8253 14.541 15.9239L15.0487 6.18415C15.0539 6.08388 14.9664 6 14.8566 6H1.1923ZM10.486 7.40625C10.486 7.09547 10.7614 6.84375 11.1014 6.84375C11.4414 6.84375 11.7168 7.09547 11.7168 7.40625V14.7188C11.7168 15.0295 11.4414 15.2812 11.1014 15.2812C10.7614 15.2812 10.486 15.0295 10.486 14.7188V7.40625ZM7.40907 7.40625C7.40907 7.09547 7.68445 6.84375 8.02445 6.84375C8.36445 6.84375 8.63984 7.09547 8.63984 7.40625V14.7188C8.63984 15.0295 8.36445 15.2812 8.02445 15.2812C7.68445 15.2812 7.40907 15.0295 7.40907 14.7188V7.40625ZM4.33215 7.40625C4.33215 7.09547 4.60753 6.84375 4.94753 6.84375C5.28753 6.84375 5.56291 7.09547 5.56291 7.40625V14.7188C5.56291 15.0295 5.28753 15.2812 4.94753 15.2812C4.60753 15.2812 4.33215 15.0295 4.33215 14.7188V7.40625Z" fill="white"/>
                        </svg></a>
                </div>
            </div>
        </div>
    @endforeach
    @endif
    <div class="cart_article" id="cart_total">
        <div id="total_text">
            <h3>dfazfazfaz</h3>
            <h3>razrfazazfa</h3>
            <h2>{{$totalPrice}}</h2>
        </div>
        <form action="{{ route('addorder') }}" method="get">
        <input type="submit" value="Passer la commande">
        </form>
    </div>
</main>
@endsection
