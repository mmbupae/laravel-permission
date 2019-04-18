<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('layouts.partials.styles')

    <title>Top Cipta Persada | @yield('title', 'TCP')</title>
</head>
<body>
<div id="app">
    @yield('body')
</div>
@include('layouts.partials.scripts')
</body>
</html>