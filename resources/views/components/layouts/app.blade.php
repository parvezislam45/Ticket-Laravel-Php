<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Ticket App' }}</title>
        @vite('resources/css/app.css')
        @livewireStyles
       
    </head>
    <body>
        <div class="px-20">
            <x-common.navbar/>
        {{ $slot }}
        @livewireScripts
        </div>
        

    </body>
</html>
