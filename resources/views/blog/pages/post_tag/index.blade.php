@extends('blog.layouts.app_master_blog')
@section('css')
    <link href="{{ mix('/css/main_post_tag.min.css', 'blog_static') }}" rel="stylesheet">
@stop
@section('header')
    @include('blog.components.header_v2.index', [
        'heading'=> '',
        'url'=> '',
        'navbar' => true
        ])
@stop
@section('content')
    <main>
        <div class="container">
            <div class="space-20"></div>
            <div class="box-content">
                <div class="box-content__left">
                    <div class="tag">
                        <h1 class="tag-title">Ngành kế toán</h1>
                    </div>
                    @include('blog.components.list_post.index')
                    <div class="box-content__paginate" style="width: 250px;margin: 0 auto;"><a href="?page=2"
                                                                                               rel="nofollow"
                                                                                               class="btn btn-radius btn-lg text-center d-block"
                                                                                               style="padding: 10px 0;font-size: 14px">
                            Xem thêm bài viết </a></div>
                </div>
                <div class="box-content__right">
                    <div class="mb-15">
                        @include('blog.components.recommend_tag.index')
                    </div>
                    @include('blog.components.list_post_sidebar.index')
                    @include('blog.components.list_post_sidebar.index')
                </div>
            </div>
        </div>
    </main>
@stop
