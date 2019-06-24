<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}

<!-- styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
<div class="content">
    <div class="main-content">
        <div class="item-bar">
            <div class="item-card">1</div>
            <div class="item-card">2</div>
            <div class="item-card">3</div>
            <div class="item-card">4</div>
        </div>
    </div>
</div>
</body>
</html>