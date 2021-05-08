<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! isset($metaSeo) ? $metaSeo->renderMetaSeo() : '' !!}
    <script>var DEVICE = "{{detectDevice()}}"</script>
    @yield('css')
    @yield('script_head')
</head>
<body>

@include("blog.components.sidebar_wrapper_mb")
@yield('header')

@include('blog.components.header.index_responsive')
@yield('content')

@include('blog.components.footer.footer_v3')
@includeWhen(detectDevice(true) != 'desktop', 'blog.components.nav_bottom')

<script src="{{ mix('/js/app_blog.js', 'blog_static') }}" type="text/javascript"></script>
@yield('script')
</body>
</html>