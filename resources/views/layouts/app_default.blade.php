<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    {!! SEO::generate() !!}
    <meta property="og:type"               content="article" />
    <meta property="fb:app_id"               content="211916683854484" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{ asset('favicon.png') }}" sizes="32x32" />
    @if(session('toastr'))
        <script>
            var TYPE_MESSAGES = "{{ session('toastr.type') }}"
            var MESSAGE = "{{ session('toastr.message') }}"
        </script>
    @endif
    <script>
        var URL_SOCIAL = '{{ route("post.social") }}'
    </script>
<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PFD7928');</script>
    <!-- End Google Tag Manager -->
    <style>@yield('css')</style>

</head>
<body>
    @if(detectDevice() == 'mobile')
        <div class="global-sidebar">
            @include('components.header.include.item_nav')
            <div class="search">
                @include('components.search._inc_form_search')
            </div>
            <ul class="header-menu" data-type="category">
                @foreach($categoriesGlobal ?? [] as $cateGlobal)
                    <li class="">
                        <a href="{{ route('get_document.render', $cateGlobal->c_slug.'-c') }}" title="{{ $cateGlobal->c_name }}">{{ $cateGlobal->c_name }}</a>
                        @if(isset($cateGlobal->child) && !$cateGlobal->child->isEmpty())
                            <ul>
                                @foreach($cateGlobal->child as $cate)
                                <li><a href="{{ route('get_document.render', $cate->c_slug.'-c') }}" title="{{ $cate->c_name }}">{{ $cate->c_name }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    @yield('not_container')
    @yield('breadcrumb')
    <div class="container">
        @yield('content')
    </div>
    @yield('content-fluid')
    @yield('not_container_bottom')
    @include('components.footer.footer_mobile')
    @yield('script')
    @if(!get_data_user('web'))
        @include('components.popup._inc_popup_login')
    @endif
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFD7928"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>
</html>
