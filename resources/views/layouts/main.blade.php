<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>
@include('partials._header')

@include('partials._navbar')

    <div class="container">
    @yield('content')
    </div>

    @include('partials._footer')
    @yield('scripts')

</body>
</html>
