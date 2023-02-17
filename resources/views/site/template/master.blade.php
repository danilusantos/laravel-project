<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('site/css/site.css')}}">

    </head>
    <body class="bg-light">

            @include('site.template.menu')

            @yield('content')

            @include('site.template.footer')

    <!-- Scripts -->
    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.js') }}"></script>
    </body>
</html>
