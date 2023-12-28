<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Listado de usuarios 1:</h1>
    @if ($Users->isEmpty())
        <p>El listado de usuarios esta vacia</p>    
    @else
        <ul>
            @foreach ($Users as $User)
            <li>{{ $user -> name }}</li>
            @endforeach
        </ul>
    @endif

    <h1>Listado de usuarios 2:</h1>
    <ul>
        @forelse ($Users as $user)
            <li>{{ $user -> name }}</li>
        @empty
            <li>Lista vacia</li>
        @endforelse
    </ul>
</body>
</html>