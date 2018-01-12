<!DOCTYPE html>
<html lang="<?=config('app.locale')?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png')}}">

    <title>
        <?=$title?>
    </title>
</head>

<body>
    <div id="app">
        @include('layouts.header') @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>