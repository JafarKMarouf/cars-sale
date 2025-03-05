<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('external.header')
    <body>
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
        @include('external.scripts')
    </body>
</html>
