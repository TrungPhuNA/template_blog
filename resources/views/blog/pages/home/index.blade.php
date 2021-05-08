@extends('blog.layouts.app_master_blog')
@section('css')
    <link href="{{ mix('/css/main_home.min.css', 'blog_static') }}" rel="stylesheet">
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
        {{--Nổi bật top--}}
        <section id="section__hot__top">
            <div class="container">
                <div class="box-hot-top d-flex">
                    <div class="box-hot-top__item first-item">
                        @include('blog.pages.home.components._inc_hot_post_top')
                    </div>
                    <div class="box-hot-top__item second-item">
                        @include('blog.pages.home.components._inc_new_post_top')
                    </div>
                    <div class="box-hot-top__item third-item">
                        @include('blog.pages.home.components._inc_hot_post_top')
                    </div>
                </div>
            </div>
        </section>

        {{--Danh sách bài viết theo category--}}
        <section id="section__main__content">
            <div class="container">
                <div class="box-title">
                    <h2>Từ khóa tìm kiếm nhiều nhất</h2>
                    <div class="line"></div>
                </div>
                @include('blog.pages.home.components._inc_tag_top_click')
                <div class="box-content">
                    <div class="box-content__left">
                        <div class="box-hot-cat">
                            <div class="box-title box-hot-cat__title">
                                <h2>Tin mới nhất</h2>
                                <div class="line"></div>
                            </div>
                            @include('blog.components.list_post.index')
                        </div>
                        <div class="box-hot-cat">
                            <div class="box-title box-hot-cat__title"><h2>Bán hàng</h2>
                                <div class="line"></div>
                                <div class="view-more"><a href="https://123job.vn/bai-viet/ban-hang-4c"
                                                          title="Bán hàng">Xem thêm <i
                                                class="fa fa-angle-right"></i></a></div>
                            </div>
                            @include('blog.components.list_post.index')
                        </div>
                        <div class="box-hot-cat">
                            <div class="box-title box-hot-cat__title"><h2>Phỏng vấn</h2>
                                <div class="line"></div>
                                <div class="view-more"><a href="https://123job.vn/bai-viet/phong-van-xin-viec-3c"
                                                          title="Phỏng vấn">Xem thêm <i
                                                class="fa fa-angle-right"></i></a></div>
                            </div>
                            @include('blog.components.list_post.index')
                        </div>
                    </div>
                    <div class="box-content__right">
                        @include('blog.components.list_post_sidebar.index')
                        @include('blog.components.list_post_sidebar.index')
                        @include('blog.components.recommend_tag.index')
                        @include('blog.components.list_cat_sidebar')
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('blog.pages.home.components._inc_about')
    @include('blog.pages.home.components._inc_keyword_seo')
@stop