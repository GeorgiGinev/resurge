<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{mix('assets/css/app.css')}}">
        <title>Laravel</title>
    </head>
    <body>
        <button class="btn btn-primary">Test</button>
        <script src="{{mix('assets/js/app.js')}}"></script>
    </body>
</html>
