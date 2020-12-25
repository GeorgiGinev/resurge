<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}"/>
    <title>TeethStyle.com</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K3RQQJW7PZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-K3RQQJW7PZ');
    </script>
</head>
<body>
    @include('components.header')
    @include('components.footer')

    <div class="container-sm">
        @yield('header')

        <section class="p-4">
            @yield('content')
        </section>

        @yield('footer')
    </div>
    <script src="{{mix('assets/js/app.js')}}"></script>
    @stack('scripts')
</body>
</html>
