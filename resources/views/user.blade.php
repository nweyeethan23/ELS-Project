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
            <nav-component></nav-component>
            <router-view></router-view>
            <footer-component></footer-component>
        </div>
        @vite(['resources/js/app.js'])
    </body>
</html>
