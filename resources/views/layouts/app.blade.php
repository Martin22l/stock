<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    </head>
    <body class="">
        <div class="">
            @include('layouts.navigation')
            <div class="has-background-grey-lighter my-4">
                <!-- Page Content -->
                @yield('content')
            </div>
           
            @include('layouts.footer')
        </div>
        <script src="{{ asset('js/stock.js')}}"></script>
    </body>
</html>
