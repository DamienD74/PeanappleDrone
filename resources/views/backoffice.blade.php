@extends('layout')
@section('title')
    Backoffice
@endsection

@section('content')

    <div class="backgroundBO">
        <button class="buttonAdd textBO"
                type="button">
            <a href="{{route('displayOrder')}}">Commande</a>
        </button>
        <button class="buttonAdd textBO"
                type="button">
            <a href="{{route('add')}}">Ajouter</a>
        </button>
        <table class="textBO">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td><a href="{{url('backoffice/modifier/'.$product->id)}}">Modifier</a></td>
                    <td><a href="{{url('backoffice/delete/'.$product->id)}}">Supprimer></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
