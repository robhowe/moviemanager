<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Movie Manager. Manage your own movie collection." />
    <meta name="abstract" content="Movie Manager. Manage your own movie collection. Sign up now - for free!" />
    <meta name="keywords" content="movie manager,movie collection,movie manager collection,movies,my movies" />
    <title>{{ config('app.name') }}</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!--<script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}" />-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <!--<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />-->
    <link rel="stylesheet" href="{{ URL::asset('css/style_general.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/style_moviem.css') }}" />
</head>
<body>
@include('shared.navbar')

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
