<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}">
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
