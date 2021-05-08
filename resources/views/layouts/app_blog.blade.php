<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>var DEVICE = "{{detectDevice()}}"</script>
    @yield('css')
    @yield('script_head')
</head>
<body>
@include("blog::components.sidebar_wrapper_mb",['categoryRoot' => $categoryRoot])
@yield('header')
@include('blog::components.header.index_reponsive')
@yield('content')
@include('component.footer.footer_v3')
@includeWhen(detectDevice(true) != 'desktop', 'component.nav_bottom')

<script src="{{ mix('/js/app_full.js', 'blog_static') }}" type="text/javascript"></script>
@yield('script')
</body>
</html>