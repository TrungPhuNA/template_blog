@extends('blog::layouts.app_master_blog')
@section('css')
    <link href="{{ mix('/css/main_search.min.css', 'blog_static') }}" rel="stylesheet">
@stop
@section('header')
    @include('blog::components.header_v2.index', [
        'heading'=> '',
        'url'=> '',
        'navbar' => true
        ])
@stop
@section('content')
    <main>
        <div class="container">
            <div class="space-10"></div>
            <form action="{{route('get.blog_search.index')}}" class="form-search">
                <input type="text" name="search" value="{{array_get($query, 'search')}}" class="input-bass"
                       placeholder="Tìm kiếm ...">
                <button class="btn-handle"><i class="fa fa-search"></i></button>
            </form>
            <div class="box-content">
                <div class="box-content__left">
                    @if(!empty($query))
                        @if(count($postsSearch) > 0)
                            <div class="search-title">
                                <p>Kết quả tìm kiếm :</p>
                            </div>
                            <div class="post-result">
                                @include('blog::components.list_post.index', ['posts'=> $postsSearch])
                                @if($postsSearch->hasMorePages())
                                    <div class="search-paginate flex-center">
                                        <a href="{{ $postsSearch->appends($query)->nextPageUrl() }}"
                                           class="btn-handle btn-base">
                                            Xem tiếp
                                            <i class="fa fa-angle-right ml-5"></i>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="search-title">
                                <p>Không tìm thấy kết quả tìm kiếm</p>
                            </div>
                        @endif
                    @endif
                </div>
                <div class="box-content__right">
                    @include('blog::components.list_post_sidebar.index')
                    @include('blog::components.list_post_sidebar.index', [
                            'postSuggestSidebar' => $postWeekView,
                            'title' => 'Xem nhiều trong tuần'
                        ])
                    {{--                @include('blog::components.recommend_tag.index')--}}
                    {{--                @include('blog::components.ads.box_ads')--}}
                </div>
            </div>
        </div>
    </main>
@stop