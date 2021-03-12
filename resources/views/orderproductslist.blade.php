@extends('layout')
@section('title')
    Backoffice
@endsection
@section('content')

    <table class="table backgroundBO textBO">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">product id</th>
            <th scope="col">order id</th>
            <th scope="col">quantity</th>
            <th scope="col">date</th>
            <th scope="col">bouton</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($listorders as $key)
            <tr>
                <td scope="row">{{ $key->id }}</td>
                <td>{{ $key->product_id }}</td>
                <td scope="row">{{ $key-> }}</td>
                <td>{{ $key->created_at }}</td>
                <td scope="row">{{ $key->id }}</td>
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
