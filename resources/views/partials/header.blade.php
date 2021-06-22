<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo" srcset="">
        <ul>
            <li><a class ="active" href="/">CHARACTERS</a></li>
            <li><a href="{{ url('comics') }}">COMICS</a></li>
            <li><a href="{{ url('movies') }}">MOVIES</a></li>
            <li><a>TV</a></li>
            <li><a>GAMES</a></li>
            <li><a>COLLECTIBLES</a></li>
            <li><a>VIDEOS</a></li>
            <li><a>FANS</a></li>
            <li><a>NEWS</a></li>
            <li><a>SEARCH</a></li>
        </ul>
    </header>
</body>
</html>
