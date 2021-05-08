<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>@yield('css')</style>
</head>
<body>
@yield('not_container')
<div class="container">
    @yield('content')
</div>
@yield('content-fluid')
@yield('script')
</body>
</html>
