<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('site/css/style.css')}}">

        <style scoped>
            main{
                min-height: 85vh;
            }

            header{
                min-height: 10vh;
            }

            .bg-dark{
                color: white;
            }
        </style>

    </head>
    <body>
        <header>
            @include('site.template.menu')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            @include('site.template.footer')
        </footer>

    <!-- Scripts -->
    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.js') }}"></script>
    </body>
</html>
