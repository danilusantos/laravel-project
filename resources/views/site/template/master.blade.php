<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>InfoDev - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('site/css/style.css')}}">

        <style scoped>
            *{
                font-family: 'Work Sans', sans-serif;
            }
            main{
                min-height: 85vh;
            }

            header{
                min-height: 10vh;
            }

            .bg-dark{
                color: white;
            }

            a{
                text-decoration: none !important;
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
