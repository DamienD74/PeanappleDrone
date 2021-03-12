@extends('layout')
@section('title')
    Backoffice
    @endsection
    @section('content')
        <button class="buttonAdd textBO"
                type="button">
            <a href="{{route('backoffice')}}">Retour</a>
        </button>
        <table class="table backgroundBO textBO">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">date</th>
                <th scope="col">bouton</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($orders as $key)
                <tr>
                    <th scope="row">{{ $key->id }}</th>
                    <td>{{ $key->created_at }}</td>
                    <td>
                        <form action="{{ url('/backoffice/orderproduct/'.$key->id) }}" method="get">
                            <button type="submit" id="update_button">Détails</button>
                        </form>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

@endsection
