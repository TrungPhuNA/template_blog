@extends('blog::layouts.app_master_blog')
@section('css')
    <link href="{{ mix('/css/site_map.css', 'blog_static') }}" rel="stylesheet">
@stop
@section('header')
    @include('blog::components.header_v2.index', [
        'heading'=> '',
        'url'=> '',
        'navbar' => true
        ])
@stop
@section('content')
    <div class="alpha-list alpha-fixed d-hidden">
        @foreach($alpha as $key)
            <a class="item" href="#{{ $key != '#' ? $key : 'khac'}}">{{ $key }}</a>
        @endforeach
    </div>
    <section>
        <div class="container">
            <h1 class="title-page">Tổng hợp từ khóa bài viết trên 123job</h1>
            <div class="box-title">
                <h2>Tìm theo chữ cái</h2>
                <div class="line"></div>
            </div>
            <div class="alpha-list alpha-top">
                @foreach($alpha as $key)
                    <a class="item" href="#{{ $key != '#' ? $key : 'khac'}}">{{ $key }}</a>
                @endforeach
            </div>
            <div class="alpha-tag">
                @foreach($alpha as $key)
                    <div class="alpha-item">
                        <div class="alpha-name" id="{{ $key != '#' ? $key : 'khac'}}">
                            <h3>{{ $key }}</h3>
                        </div>
                        @if(isset($alphaTag[$key]))
                            <div class="tags">
                                @foreach($alphaTag[$key] as $tag)
                                    <div class="item">
                                        <a href="{{ create_url_seo_dynamic($tag->tb_slug, $tag->id, 't')  }}"
                                           title="{{ $tag->tb_name }}">
                                            {{ $tag->tb_name }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop