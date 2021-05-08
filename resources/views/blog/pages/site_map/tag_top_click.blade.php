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
    <section>
        <div class="container">
            <h1 class="title-page">Từ khóa được xem nhiều nhất</h1>
            <div class="tags mb-30">
                @foreach($tagTopClick as $tag)
                    <div class="item">
                        <a href="{{ create_url_seo_dynamic($tag->tb_slug, $tag->id, 't')  }}"
                           title="{{ $tag->tb_name }}">
                            {{ $tag->tb_name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop