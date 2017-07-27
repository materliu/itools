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
            'username' => Auth::user() ? Auth::user()->realname : '',
            'appName' => config('app.name', 'Laravel')
        ]) !!};

        window.appEnv = {
            apiPrefix: "{{env('apiPrefix', 'http://deploy.df.cn/api')}}"
        };
    </script>

    <!-- Styles -->
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

    <article id="app">
        <app></app>
    </article>

    <!-- Scripts -->
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>
