<!doctype html>
<html lang="en">

    <head>
        @include('partials._head')
    </head>

    <body>
        @include('partials._nav')

        <div class="container" style="margin-top: 4%">
            @yield('content')
            @include('partials._footer')
        </div>

        @include('partials._javascript4Bootsrap')
    </body>
</html>

