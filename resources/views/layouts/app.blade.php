<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'appName' => config('app.name', 'Laravel'),
            'username' => ''
        ]) !!};
    </script>

    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('header')

        <div class="body-container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->

</body>
</html>
