<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="True">

    <link rel="stylesheet" href="/css/materialize.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <link rel="stylesheet" href="/css/fakeLoader.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/img/favicon.png">
    <!-- scripts -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/materialize.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/fakeLoader.min.js"></script>
    <script src="/js/animatedModal.min.js"></script>
    <script src="/js/main.js"></script>

</head>
<body>

<!-- navbar top -->
@include('public.navbar_top')
<!-- end navbar top -->
<!-- side nav right-->
@include('public.side_nav_right')
<!-- end side nav right-->
<!-- navbar bottom -->
@include('public.navbar_bottom')
<!-- end navbar bottom -->
<!-- menu -->
@include('public.menu')
<!-- end menu -->
<!-- cart menu -->
@include('public.cart_menu')
<!-- end cart menu -->

@yield('content')

<!-- loader -->
<div id="fakeLoader"></div>
<!-- end loader -->
<!-- footer -->
@include('public.footer')
<!-- end footer -->
</body>
</html>

