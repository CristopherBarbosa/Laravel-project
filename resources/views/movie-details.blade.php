<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['title'] }}</title>
</head>
<body>
    <h1>{{ $movie['title'] }}</h1>
    <img src="https://image.tmdb.org/t/p/w300{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
    <p>{{ $movie['overview'] }}</p>
    <p>Nota: {{ $movie['vote_average'] }}</p>
    <p>Data de lançamento: {{ $movie['release_date'] }}</p>
    <a href="{{ route('home') }}">Voltar para Home</a>
</body>
</html>
