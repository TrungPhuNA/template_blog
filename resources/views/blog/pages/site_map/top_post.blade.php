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
            <h1 class="title-page">Tổng hợp bài viết nổi bật</h1>
            <div class="box-content">
                <div class="box-content__left">
                    @include('blog::components.list_post_sidebar.index', [
                            'postSuggestSidebar' => $postTopView,
                            'title' => 'Top bài viết nổi bật nhất'
                        ])
                </div>
                <div class="box-content__right">
                    @include('blog::components.list_post_sidebar.index', [
                            'postSuggestSidebar' => $postWeekView,
                            'title' => 'Xem nhiều trong tuần'
                        ])
                </div>
            </div>
        </div>
    </section>
@stop