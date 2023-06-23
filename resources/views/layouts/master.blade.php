<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}>">
    @stack('style')
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('genre.index')}}">Genres</a></li>
            <li><a href="{{route('song.index')}}">Songs</a></li>
            <li><a href="{{route('playlist.index')}}">Playlists</a></li>
        </ul>
    </nav>
    <main>
        @yield('content') 
    </main>
    <footer>
        &copy; Jovian Kartiko - 2023
    </footer>
</body>
</html>