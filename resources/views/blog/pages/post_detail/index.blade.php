@extends('blog.layouts.app_master_blog')
@section('css')
    <link href="{{ mix('/css/main_post_detail.min.css', 'blog_static') }}" rel="stylesheet">
@stop
@section('header')
    @include('blog.components.header_v2.index', [
        'heading'=> 'Trending',
        'url'=> route('get.blog.category'),
        'navbar' => true
        ])
@stop

@section('content')
    <main id="content">
            <div class="container">
                <div class="box-post-detail">
                    <div class="box-post-detail__left">
                        @include('blog.pages.post_detail.components._inc_breadcrumb')
                        <div class="post-detail">
                            <div class="post-detail__top">
                                <div class="post-detail__info-cover">
                                    <div class="post-detail__info">
                                        <h1 class="post-detail__info__title">
                                            Chi tiết các lịch nghỉ lễ 2021 cho người lao động mới nhất
                                        </h1>
                                        <div class="post-detail__info__author">
                                            <div> Chuyên mục : <a href="{{ route('get.blog.category') }}"
                                                                  title="Trending"> Trending </a> - Phạm Huyền
                                                - 2021-03-05 10:38:05
                                            </div>
                                            <div> 147 lượt xem</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-detail__content">
                                @include('blog.pages.post_detail.components._inc_main_content')
                            </div>
                        </div>
                        <div class="box-share-rate flex-between">
                            <div class="post-share"><span class="title">Chia sẻ bài viết</span> <a rel="nofollow"
                                                                                                   title="Chia sẻ với facebook"
                                                                                                   class="btn-share facebook"
                                                                                                   href="https://api.addthis.com/oexchange/0.8/forward/facebook/offer?url=https://123job.vn/bai-viet/chi-tiet-cac-lich-nghi-le-2021-cho-nguoi-lao-dong-moi-nhat-2103.html&amp;pubid=ra-5ecf31fb5998faf1&amp;title=Chi tiết các lịch nghỉ lễ 2021 cho người lao động mới nhất&amp;ct=1&amp;pco=tbxnj-1.0"
                                                                                                   target="_blank"><i
                                            class="fa fa-facebook-f"></i></a> <a rel="nofollow"
                                                                                 title="Chia sẻ với linkedin"
                                                                                 class="btn-share linkedin"
                                                                                 href="https://api.addthis.com/oexchange/0.8/forward/linkedin/offer?url=https://123job.vn/bai-viet/chi-tiet-cac-lich-nghi-le-2021-cho-nguoi-lao-dong-moi-nhat-2103.html&amp;pubid=ra-5ecf31fb5998faf1&amp;title=Chi tiết các lịch nghỉ lễ 2021 cho người lao động mới nhất&amp;ct=1&amp;pco=tbxnj-1.0"
                                                                                 target="_blank"><i
                                            class="fa fa-linkedin"></i></a> <a rel="nofollow"
                                                                               title="Chia sẻ với twitter"
                                                                               class="btn-share twitter"
                                                                               href="https://api.addthis.com/oexchange/0.8/forward/twitter/offer?url=https://123job.vn/bai-viet/chi-tiet-cac-lich-nghi-le-2021-cho-nguoi-lao-dong-moi-nhat-2103.html&amp;pubid=ra-5ecf31fb5998faf1&amp;title=Chi tiết các lịch nghỉ lễ 2021 cho người lao động mới nhất&amp;ct=1&amp;pco=tbxnj-1.0"
                                                                               target="_blank"><i
                                            class="fa fa-twitter"></i></a> <a rel="nofollow" title="Chia sẻ với gmail"
                                                                              class="btn-share gmail"
                                                                              href="https://api.addthis.com/oexchange/0.8/forward/gmail/offer?url=https://123job.vn/bai-viet/chi-tiet-cac-lich-nghi-le-2021-cho-nguoi-lao-dong-moi-nhat-2103.html&amp;pubid=ra-5ecf31fb5998faf1&amp;title=Chi tiết các lịch nghỉ lễ 2021 cho người lao động mới nhất&amp;ct=1&amp;pco=tbxnj-1.0"
                                                                              target="_blank"><i
                                            class="fa fa-envelope"></i></a></div>
                            <div class="post-rate d-flex ali-center">
                                <div class="rate-title"> Đánh giá bài viết</div>
                                <div class="rate-action">
                                    <div class="rating" data-value="0"><label> <input type="radio" name="rating"
                                                                                      value="5"> </label> <label> <input
                                                    type="radio" name="rating" value="4"> </label> <label> <input
                                                    type="radio" name="rating" value="3"> </label> <label> <input
                                                    type="radio" name="rating" value="2"> </label> <label> <input
                                                    type="radio" name="rating" value="1"> </label></div>
                                    <span class="rate-feedback">Cảm ơn bạn đã đánh giá bài viết</span></div>
                            </div>
                        </div>
                        <div class="next-post"><a
                                    href="https://123job.vn/bai-viet/retro-la-gi-phong-cach-retro-co-dac-diem-gi-lai-thu-hut-gioi-tre-den-vay-2109.html"
                                    title="Xem tiếp: Retro là gì? Phong cách Retro có đặc điểm gì lại thu hút giới trẻ đến vậy?">
                                Xem tiếp <u>Retro là gì? Phong cách Retro có đặc điểm gì lại thu hút giới trẻ đến
                                    vậy?</u> </a></div>
                        @include("blog.pages.post_detail.components._inc_list_tag")
                        <div class="box-post">
                            <div class="box-post__title"><h4>Bài viết nhiều người đọc</h4>
                                <div class="dot"></div>
                            </div>
                            <ul class="box-post__list">
                                <li><h3>
                                        <a href="https://123job.vn/bai-viet/phieu-dai-cu-tri-la-gi-vai-tro-dac-biet-cua-dai-cu-chi-trong-bau-cu-tai-my-1682.html"
                                           title="Phiếu đại cử tri là gì? Vai trò đặc biệt của đại cử chi trong bầu cử tại Mỹ">Phiếu
                                            đại cử tri là gì? Vai trò đặc biệt của đại cử chi trong bầu cử tại Mỹ</a>
                                    </h3></li>
                                <li><h3>
                                        <a href="https://123job.vn/bai-viet/ngay-quoc-te-nam-gioi-va-nhung-thong-tin-thu-vi-ve-ngay-19-11-1780.html"
                                           title="Ngày quốc tế nam giới và những thông tin thú vị về ngày 19/11">Ngày
                                            quốc tế nam giới và những thông tin thú vị về ngày 19/11</a></h3></li>
                                <li><h3>
                                        <a href="https://123job.vn/bai-viet/google-doodles-thang-12-mua-le-hoi-bat-dau-tren-toan-the-gioi-1881.html"
                                           title="Google Doodles tháng 12 - Mùa lễ hội bắt đầu trên toàn thế giới">Google
                                            Doodles tháng 12 - Mùa lễ hội bắt đầu trên toàn thế giới</a></h3></li>
                                <li><h3>
                                        <a href="https://123job.vn/bai-viet/nong-lich-nghi-tet-nguyen-dan-tan-suu-2021-cap-nhap-moi-nhat-1838.html"
                                           title="Nóng: Lịch nghỉ tết Nguyên đán Tân Sửu 2021 cập nhập mới nhất">Nóng:
                                            Lịch nghỉ tết Nguyên đán Tân Sửu 2021 cập nhập mới nhất</a></h3></li>
                                <li><h3>
                                        <a href="https://123job.vn/bai-viet/joe-biden-la-ai-chien-luoc-cua-doi-thu-canh-tranh-chuc-tong-thong-cua-dtrump-1688.html"
                                           title="Joe Biden là ai? Chiến lược đúng đắn phá kỷ lục lịch sử bầu cử tổng thống">Joe
                                            Biden là ai? Chiến lược đúng đắn phá kỷ lục lịch sử bầu cử tổng thống</a>
                                    </h3></li>
                            </ul>
                        </div>
                    </div>
                    <div class="box-post-detail__right">
                        <div class="float-right widget-toc"><p class="toc-title">Mục Lục</p>
                            <ol>
                                <li>
                                    <a href="#I.+Quy+%C4%91%E1%BB%8Bnh+m%E1%BB%9Bi+nh%E1%BA%A5t+v%E1%BB%81+l%E1%BB%8Bch+ngh%E1%BB%89+l%E1%BB%85%C2%A02021">I.
                                        Quy định mới nhất về lịch nghỉ lễ&nbsp;2021</a></li>
                                <li>
                                    <a href="#II.+L%E1%BB%8Bch+ngh%E1%BB%89+l%E1%BB%85+chi+ti%E1%BA%BFt+trong+n%C4%83m+2021">II.
                                        Lịch nghỉ lễ chi tiết trong năm 2021</a>
                                    <ol>
                                        <li>
                                            <a href="#1.+L%E1%BB%8Bch+ngh%E1%BB%89+l%E1%BB%85+Gi%E1%BB%97+t%E1%BB%95+H%C3%B9ng+V%C6%B0%C6%A1ng+-+01+ng%C3%A0y">1.
                                                Lịch nghỉ lễ Giỗ tổ Hùng Vương - 01 ngày</a></li>
                                        <li>
                                            <a href="#2.+Ng%C3%A0y+Gi%E1%BA%A3i+Ph%C3%B3ng+mi%E1%BB%81n+Nam%C2%A0v%C3%A0+ng%C3%A0y+Qu%E1%BB%91c+t%E1%BA%BF+lao+%C4%91%E1%BB%99ng+-+04+ng%C3%A0y">2.
                                                Ngày Giải Phóng miền Nam&nbsp;và ngày Quốc tế lao động - 04 ngày</a>
                                        </li>
                                        <li><a href="#3.+Ng%C3%A0y+Qu%E1%BB%91c+kh%C3%A1nh+(02/9)+-+04+ng%C3%A0y">3.
                                                Ngày Quốc khánh (02/9) - 04 ngày</a></li>
                                    </ol>
                                </li>
                                <li><a href="#III.+K%E1%BA%BFt+lu%E1%BA%ADn">III. Kết luận</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="box-title box-hot-cat__title mt-20">
                    <h2>Mọi người thường xem thêm</h2>
                    <div class="line"></div>
                </div>
                @include("blog.pages.post_detail.components._inc_post_related")
        </div>
    </main>
@stop

@section('script')
    <script src="{{ asset('ads/js/lazy_ads.js') }}"></script>
@stop