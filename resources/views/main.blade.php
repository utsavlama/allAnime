<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name = "viewport" content="width=device-width, initial-scale=1">

        <title>AllAnime - @yield('title')</title>

        <!--javascripts-->
        @include('partials._scripts')
        <!--css-->
        @include('partials._css')
    </head>
    <body>

        <!--menu-->
        @include('partials._primaryMenu')<!--menu-->

        <!--secondary menu container-->
        @include('partials._secondaryMenu')<!--secondary menu container-->

        

       
        <!--content container-->
        <div class = "ui padded container segment">
            @include('partials._messages')
            @yield('content')

        </div><!--content container-->

        <!--footer-->
        @include('partials._footer');<!--footer-->



    </body>
</html>
