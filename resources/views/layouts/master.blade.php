<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>
		
		@stack("css")
    </head>
    <body>
        @yield("body")
		
		@stack("scripts")
    </body>
</html>
