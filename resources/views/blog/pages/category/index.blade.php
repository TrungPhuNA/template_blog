@extends('blog.layouts.app_master_blog')
@section('css')
    <link href="{{ mix('/css/main_category.min.css', 'blog_static') }}" rel="stylesheet">
@stop
@section('header')
    @include('blog.components.header_v2.index', [
        'heading'=> 'Trending',
        'url'=> route('get.blog.category'),
        'navbar' => true
        ])
@stop
@section('content')
    <main>
        <div class="container">
            @include('blog.pages.category.components._inc_breadcrumb')
            <div class="box-content">
                <div class="box-content__left">
                    @if(detectDevice(true) == 'mobile')
                    <div class="category-info-mb">
                        <h1 class="category-info-mb__title">Trending</h1>
                        <h4 class="category-info-mb__desc">Những vấn đề "hot", được quan tâm, mang tính thời sự sẽ được cập nhật liên tục tại đây.</h4>
                    </div>
                        @include('blog.pages.category.components._inc_sub_category_responsive')
                    @endif
                    @include('blog.components.post_hot_top.index')
                    <div class="box-new-post-cat">
                        <div class="box-title box-hot-cat__title">
                            <h2>Tin mới nhất</h2>
                            <div class="line"></div>
                        </div>
                        @include('blog.components.list_post.index')
                            <div class="post-pagination">
                                <ul class="pagination">
                                    <li class="disabled"><a rel="follow" class="isDisabled" href="javascript:void(0)">
                                            Trước </a></li>
                                    <li class="active"><a rel="follow" class="item" href="javascript:void(0)">1</a></li>
                                    <li><a rel="follow" class="item"
                                           href="{{ route('get.blog.category') }}">2</a>
                                    </li>
                                    <li><a rel="follow" class="item"
                                           href="{{ route('get.blog.category') }}">3</a>
                                    </li>
                                    <li><a rel="follow" class="item"
                                           href="{{ route('get.blog.category') }}">4</a>
                                    </li>
                                    <li><a rel="follow" class="item"
                                           href="{{ route('get.blog.category') }}">5</a>
                                    </li>
                                    <li><a href="{{ route('get.blog.category') }}"
                                           rel="follow"> Sau</a></li>
                                </ul>
                            </div>
                        <div class="post-pagination-mb flex-center mt-re-20 mb-40"><a
                                    href="{{ route('get.blog.category') }}"
                                    class="btn-handle btn-base">Xem thêm tin khác<i class="fa fa-angle-right ml-5"></i></a>
                        </div>
                    </div>
                    <div class="box-hot-cat">
                        <div class="box-title box-hot-cat__title"><h2>Việc tốt nhất</h2>
                            <div class="line"></div>
                            <div class="view-more"><a href="https://123job.vn/bai-viet/viec-tot-nhat-1c"
                                                      title="Seo Là Gì?"> Xem thêm <i class="fa fa-angle-right"></i>
                                </a></div>
                        </div>
                        @include('blog.components.list_post.index')
                    </div>
                        <div class="box-hot-cat">
                            <div class="box-title box-hot-cat__title"><h2>TƯ VẤN NGHỀ</h2>
                                <div class="line"></div>
                                <div class="view-more"><a href="https://123job.vn/bai-viet/viec-tot-nhat-1c"
                                                          title="Seo Là Gì?"> Xem thêm <i class="fa fa-angle-right"></i>
                                    </a></div>
                            </div>
                            @include('blog.components.list_post.index')
                        </div>
                </div>
                <div class="box-content__right">
                    @if(detectDevice(true) != 'mobile')
                    <div class="category-info">
                        <h1 class="category-info__title">Trending</h1>
                        <h4 class="category-info__desc">Những vấn đề "hot", được quan tâm, mang tính thời sự sẽ được cập nhật liên tục tại đây.</h4>
                    </div>
                    @include('blog.pages.category.components._inc_sub_category_responsive')
                    @endif
                    @include('blog.components.list_post_sidebar.index')
                    @include('blog.components.list_post_sidebar.index')
                    @include('blog.components.recommend_tag.index')

                </div>

            </div>
        </div>
        @include('blog.pages.category.components._inc_about')
    </main>
@stop