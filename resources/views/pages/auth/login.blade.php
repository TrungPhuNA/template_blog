@extends('layouts.app_default')
@section('title', 'Trang chủ | conha.vn')
@section('css')
    <style>
        .sg ins {
            margin: auto;
        }
        <?php $style = file_get_contents('assets/css/home.min.css');echo $style;?>
    </style>
@stop
@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
@stop


@section('content-fluid')
    <section class="breadcrumb" style="padding: 0">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="Trang chủ">Trang chủ <i class="fa fa-angle-right"></i></a></li>
                <li><span>Đăng nhập</span></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div style="height: 50vh;display: flex;justify-content: center;align-items: center;flex-direction: column">
{{--                    <a href="{{ route('get.login_social',['drive' => 'facebook']) }}"--}}
{{--                       class="loginBtn btn loginBtn--facebook">--}}
{{--                        Login with Facebook--}}
{{--                    </a>--}}

                    <a href="{{ route('get.login_social',['drive' => 'google']) }}" class="loginBtn btn loginBtn--google">
                        Login with Google
                    </a>
                </div>
        </div>
    </section>
@stop

@section('not_container_bottom')
    @include('components.footer.footer', [
        'container' => 'container'
    ])
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/home.js');echo $style;?>
    </script>
@stop
