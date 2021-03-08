<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

</body>
</html>
    <div class="admin">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
            </thead>

            <tbody>
            @foreach($admins as $admin)
            <tr>
                <td scope="row">{{$admin->ID}}</td>
                <td>{{$admin->Name}}</td>
                <td>
                    <button type="button" class="btn btn-light"><a href="{{route('product.modify', ['ID'=>$admin->ID])}}">Modifier</a></button>
                </td>
                <td><form action="{{route('product.delete', ['ID'=>$admin->ID])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <button type="button" class="btn btn-lightr"><a href="{{route('product.create', ['ID'=>$admin->ID])}}">Ajouter</a></button>
    </div>



