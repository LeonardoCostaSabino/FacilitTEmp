<!doctype html>
<html lang="{{ app()->getLocale() }}" >
<head>
    @include('public.head')
</head>
<body>

    <!-- <header>
        @include('public.header')
    </header> -->
    <div id="root">
        @yield('content')
    </div>
    <footer>
        @include('default.footer')
    </footer>

</body>
</html>
