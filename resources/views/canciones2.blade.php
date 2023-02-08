<!DOCTYPE>
<html>
    <head></head>
    <body>
        <h1>CANCIONES</h1>
        @if(is_null($cancion))
        <ul>
            @foreach ($canciones as $cancion)
                <li>{{ $cancion['cancion']}} - {{ $cancion['artista']}}</li>
            @endforeach
        </ul>
        @else
            <h1>{{$cncion['cancion']}}</h1>
            <h2>{{$cncion['artista']}}</h2>
        @endif
    </body>
</html>