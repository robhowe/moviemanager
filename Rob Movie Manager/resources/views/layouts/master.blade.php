<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Movie Manager. Manage your own movie collection." />
    <meta name="abstract" content="Movie Manager. Manage your own movie collection. Sign up now - for free!" />
    <meta name="keywords" content="movie manager,movie collection,movie manager collection,movies,my movies" />
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/moviecollection') }}">Movie Collection</a></li>
            </ul>
        </div>
    </nav>

    <div class="content container">
        @yield('content')
    </div>

    <footer id="moviem-footer">
        <div class="container">
            <span id="moviem-copyright">&copy; 2017 by Rob Howe</span>
        </div>
    </footer>
</body>
</html>
