<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <x-input @class('foo-bar') />
        <x-input @disabled(true) @class('foo-bar') />
        <button @disabled(true)>Disabled</button>
    </body>
</html>
