<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Filmes Populares</h1>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 16px;">
        @foreach ($movies as $movie)
            <div>
                <img src="https://image.tmdb.org/t/p/w200{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}">
                <h2>{{ $movie['title'] }}</h2>
                <a href="{{ route('movie.details', $movie['id']) }}">Ver detalhes</a>
            </div>
        @endforeach
    </div>
</body>
</html>
