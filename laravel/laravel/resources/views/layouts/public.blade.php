<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Events4You | @yield('title', 'Preordina!')</title>
        @include('layouts.header')
    </head>
    <body>
        
        @include('layouts._navpublic')
        @yield('content')
        @include('layouts.footer')
        @include('layouts.footer-scripts')
    </body>
</html>