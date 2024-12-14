<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Els</title>
        @vite('resources/sass/app.scss')

    </head>
    <body class="flex-column d-flex">
        <div id="app">
            <login-nav></login-nav>
            <router-view></router-view>
        </div>
        @vite(['resources/js/app.js'])
    </body>
</html>
