<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
</head>
<body>
    <h1>CANCIONES</h1>

    @if(is_null($cancion_se))
        <ul>
            @foreach($listaCanciones as $cancion)
                <li>{{ $cancion['Nombre'] }} - {{ $cancion['Artista'] }}</li>
            @endforeach
        </ul>
    @else
        <h1> {{ $cancion_se['Nombre'] }} </h1>
        <h2> {{ $cancion_se['Artista'] }} </h2>
    @endif



</body>
</html>