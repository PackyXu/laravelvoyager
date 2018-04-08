<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Packy Xu">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" title="Favicon">
    {{--<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/livestyle.css') }}" rel="stylesheet">
    <title>LaravelVoyager @yield('title')</title>
</head>
<body>

    <div class="container" id="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
        @yield('footer')
    </div>
</body>
</html>