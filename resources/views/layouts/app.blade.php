<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="icon" href="{!! asset('https://pbs.twimg.com/profile_images/747773763073220608/0Wpv7XOB_400x400.jpg  ') !!}"/>       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">-->

    <title>
        @isset($title)
            {{ $title }} | 
        @endisset
        {{ config('app.name') }}
    </title>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            
            color: black;
            text-align: center;
        }
</style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('partials.navbar')
        <main class="py-4">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->
</body>
</html>
