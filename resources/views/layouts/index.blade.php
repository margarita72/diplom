<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @section('styles')
        @include('items.styles')
    @show
</head>
<body class="animsition">
    <!-- Header -->
        @include('items.header')
    <!-- shopping card -->
        @section('shopping_card')
            @include('items.shopping_card')
        @show

            @yield('shopping_card')
    <!-- Slider -->
        @yield('slider')
    <!-- Banner -->
        @include('items.Banner')
    <!-- Product -->
        @yield('product')
    <!-- Footer -->
    @include('items.footer')
    <!-- Modal1 -->
    @yield('Model')
    <!-- script -->
        @yield('script')
</body>
</html>