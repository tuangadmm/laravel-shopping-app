<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="UTF-8">
        <title> GARAGE </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{'./sources/bootstrap-3.3.6-dist/css/bootstrap.css'}}">
        <link rel="stylesheet" type="text/css" href="{{'./sources/font-awesome-4.5.0/css/font-awesome.css'}}">
        <link rel="stylesheet" type="text/css" href="{{'./style/main.css'}}">
    </head>

    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>

